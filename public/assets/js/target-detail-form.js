const openDeleteModalBtns = document.querySelectorAll('a[data-bs-target="#deleteModal"]');
const deleteModal = document.querySelector('#deleteModal');

openDeleteModalBtns.forEach(btn => {
    btn.addEventListener('click', handleOpenDeleteModal);
});

async function handleOpenDeleteModal(e) {
    try {
        const url = e.target.dataset.attr;
        const bsModal = new bootstrap.Modal(deleteModal)
        if (!url) {
            return;
        }
        bsModal.show();
        const res = await fetch(url);
        if (!res.ok) throw new Error(res.statusText);
        const html = await res.text();
        deleteModal.querySelector('.model-wrapper').innerHTML = html;

    } catch (err) {
        console.log("handleOpenDeleteModal", err);
    }
}

const editModalBtns = document.querySelectorAll('a[data-bs-target="#editTaskForm"]');
const editModal = document.querySelector('#editTaskForm');

editModalBtns.forEach(btn => {
    btn.addEventListener('click', handleOpenEditModal);
});

async function handleOpenEditModal(e) {
    try {
        const url = e.target.dataset.attr;
        console.log(url);
        const bsModal = new bootstrap.Modal(editModal);
        const targetFormId = url.split('/').pop();
        console.log(targetFormId);
        if (!url) {
            return;
        }
        bsModal.show();
        const res = await fetch(url);
        if (!res.ok) throw new Error(res.statusText);
        const html = await res.text();
        editModal.querySelector('.model-wrapper').innerHTML = html;
        //load plugins
        await loadPlugins(targetFormId);
    } catch (err) {
        console.log("handleOpenEditModal", err);
    }
}

async function loadPlugins(taskFormId) {
    $('.selectpicker').selectpicker();
    $('.repeater').repeater({
        show: function () {
            $(this).slideDown();
        },
        hide: function (e) {
            confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
        },

        update: function () {
            myRepeater.repeater('setIndexes');
        },
    });

    $("#target_id_select").select2({
        dropdownParent: $('#editTaskForm .model-wrapper'),

        ajax: {
            url: API_URL + '/targets',
            headers: {
                "Authorization": "Bearer " + JWT_TOKEN,
                "Content-Type": "application/json",
            },
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term || "", // search term
                    page: params.page,
                    limit: 20
                };
            },
            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;
                return {
                    results: data.data.data,
                    pagination: {
                        more: data.data.current_page < data.data.last_page
                    }
                };
            },
            cache: true
        },

        placeholder: 'Tìm kiếm định mức',
        minimumInputLength: 1,
        templateResult: formatTarget,
        templateSelection: formatTargetSelection,
        // language: {
        //     // You can find all of the options in the language files provided in the
        //     // build. They all must be functions that return the string that should be
        //     // displayed.
        //     inputTooShort: function () {
        //         return "Vui lòng nhập từ khóa để tìm kiếm";
        //     },
        //     loading: function () {
        //         return "Đang tìm kiếm...";
        //     }
        // }

    });

    // Fetch the preselected item, and add to the control
    const targetSelect = $('#target_id_select');

    const taskFormDetail = await fetch(API_URL + '/target-detail-forms/' + taskFormId, {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + JWT_TOKEN
        },
        method: 'GET'
    });
    const taskFormDetailData = await taskFormDetail.json();
    const selectedTarget = taskFormDetailData.data.target;
    const newOption = new Option(selectedTarget.name, selectedTarget.id, true, true);
    targetSelect.append(newOption).trigger('change');

    // manually trigger the `select2:select` event
    targetSelect.trigger({
        type: 'select2:select',
        params: {
            data: selectedTarget
        }
    });
}


function formatTarget(target) {

    return target.name
}

function formatTargetSelection(target) {
    if (target.text) return target.text;
    if (target.name) return target.name;
    return target.name;
}

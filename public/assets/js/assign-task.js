
const assignTaskFormContainer = document.getElementById('assign-task-form-container');
const tableTrs = document.querySelectorAll('tr.clickTable');

tableTrs.forEach((tr) => {
    tr.addEventListener('click', handleShowAssignTaskForm);
});

let listKPIKey = [];
async function fetchKpiKeys() {
    try {
        const resp = await fetch(`${API_URL}/kpi-keys`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        })
        const data = await resp.json();
        const list = data.data.data;
        listKPIKey = list;
        console.log(listKPIKey);

    } catch (err) {
        console.log("fetchKpiKeys", err);
    }
}

async function handleShowAssignTaskForm(evt) {
    try {
        evt.preventDefault();
        const url = evt.currentTarget.dataset.attr;
        console.log(url);
        const response = await fetch(url);
        const html = await response.text();
        assignTaskFormContainer.innerHTML = html;
        //reload jquery plugins
        reloadJqueryPlugins()

        if (listKPIKey.length === 0) {
            await fetchKpiKeys();
        }
        window.document.getElementById('key-select').addEventListener('change', (e) => {
            handleChangeKpiKey(e, listKPIKey);
        });



    } catch (err) {
        console.log("handleShowAssignTaskForm", err);
    }
}




function handleChangeKpiKey(e, listKPIKey) {
    const id = e.target.value;
    const kpiKey = listKPIKey.find(item => +item.id === +id);
    if (!kpiKey) {
        console.log('kpiKey not found');
        return;
    };

    const unit = kpiKey.unit.name;

    const unitInput = e.target.parentElement.parentElement.parentElement.querySelector('.unit');

    if (!unitInput) {
        console.log('unitInput not found');
        return;
    }
    unitInput.value = unit;

}

const unAssignTaskBtns = document.querySelectorAll('a[data-bs-target="#unAssignedTaskModal"]');
const unAssignedTaskModal = document.getElementById('unAssignedTaskModal');

unAssignTaskBtns.forEach((btn) => {
    btn.addEventListener('click', handleShowUnAssignedTaskModal);
});

async function handleShowUnAssignedTaskModal(evt) {
    try {
        const url = evt.currentTarget.dataset.attr;
        const response = await fetch(url);
        const html = await response.text();
        unAssignedTaskModal.querySelector('.modal-body-container').innerHTML = html;
    } catch (err) {
        console.log("handleShowUnAssignedTaskModal", err);
    }
}

const editAssignedTaskBtns = document.querySelectorAll('a[data-bs-target="#editAssignedTask"]');
const editAssignedTaskModal = document.getElementById('editAssignedTask');

editAssignedTaskBtns.forEach((btn) => {
    btn.addEventListener('click', handleShowEditAssignedTaskModal);
});

async function handleShowEditAssignedTaskModal(evt) {
    try {
        const url = evt.currentTarget.dataset.attr;
        const response = await fetch(url);
        const html = await response.text();
        editAssignedTaskModal.querySelector('.modal-body-container').innerHTML = html;
        //reload jquery plugins
        reloadJqueryPlugins()
    } catch (err) {
        console.log("handleShowEditAssignedTaskModal", err);
    }
}

const deleteReprtTaskBtns = document.querySelectorAll('a[data-bs-target="#deleteReportTaskModal"]');
const deleteReportTaskModal = document.getElementById('deleteReportTaskModal');

deleteReprtTaskBtns.forEach((btn) => {
    btn.addEventListener('click', handleShowDeleteReportTaskModal);
});

async function handleShowDeleteReportTaskModal(evt) {
    try {
        const url = evt.currentTarget.dataset.attr;
        const response = await fetch(url);
        const html = await response.text();
        deleteReportTaskModal.querySelector('.modal-body-container').innerHTML = html;
    } catch (err) {
        console.log("handleShowDeleteReportTaskModal", err);
    }
}

const editReportTaskBtns = document.querySelectorAll('a[data-bs-target="#editReportTaskModal"]');
const editReportTaskModal = document.getElementById('editReportTaskModal');

editReportTaskBtns.forEach((btn) => {
    btn.addEventListener('click', handleShowEditReportTaskModal);
});

async function handleShowEditReportTaskModal(evt) {
    try {
        const url = evt.currentTarget.dataset.attr;
        const response = await fetch(url);
        const html = await response.text();
        editReportTaskModal.querySelector('.modal-body-container').innerHTML = html;
        //reload jquery plugins
        reloadJqueryPlugins()
    } catch (err) {
        console.log("handleShowEditReportTaskModal", err);
    }
}


function reloadJqueryPlugins() {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        locale: {
            format: 'DD/MM/YYYY'
        },
        language: 'ru'
    });
    // $('input[name="daterange"]').val('');
    $('input[name="daterange"]').attr("placeholder", "Chọn thời hạn");

    $.datetimepicker.setLocale('vi');
    $('.deadlinePicker').daterangepicker({
        locale: {
            format: 'DD/MM/YYYY',
        },
        timepicker: false,
    });
    $(".selectpicker").selectpicker();
    $('[data-bs-toggle="tooltip"]').tooltip();
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
}



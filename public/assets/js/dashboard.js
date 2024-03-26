// Path: public/assets/js/dashboard.js

const targetDetailModalBtns = document.querySelectorAll('.targetDetailModalBtn');
const targetDetailModal = document.getElementById('targetDetailModal');
targetDetailModalBtns.forEach((btn) => {
    btn.addEventListener('click', handleOpenTargetDetailModal);
});

const reportTaskModalBtns = document.querySelectorAll('.reportTaskModalBtn');
const reportTaskModal = document.getElementById('reportTaskModal');
reportTaskModalBtns.forEach((btn) => {
    btn.addEventListener('click', handleOpenReportTaskModal);
});


const targetLogModalBtns = document.querySelectorAll('td[data-bs-target="#targetLogModal"]');
const targetLogModal = document.getElementById('targetLogModal');
targetLogModalBtns.forEach((btn) => {
    btn.addEventListener('click', handleOpenTargetLogModal);
});

const reportTaskLogModalBtns = document.querySelectorAll('td[data-bs-target="#reportTaskLogModal"]');
const reportTaskLogModal = document.getElementById('reportTaskLogModal');
reportTaskLogModalBtns.forEach((btn) => {
    btn.addEventListener('click', handleOpenReportTaskLogModal);
});

const editReportModalBtns = document.querySelectorAll('a[data-bs-target="#editReportModal"]');
const editReportModal = document.getElementById('editReportModal');
editReportModalBtns.forEach((btn) => {
    btn.addEventListener('click', handleOpenEditReportModal);
});

const deleteReportModalBtns = document.querySelectorAll('a[data-bs-target="#deleteReportModal"]');
const deleteReportModal = document.getElementById('deleteReportModal');
deleteReportModalBtns.forEach((btn) => {
    btn.addEventListener('click', handleOpenDeleteReportModal);
});

const convertReportTaskModalBtns = document.querySelectorAll('a[data-bs-target="#convertReportTaskModal"]');
const convertReportTaskModal = document.getElementById('convertReportTaskModal');
convertReportTaskModalBtns.forEach((btn) => {
    btn.addEventListener('click', handleOpenConvertReportTaskModal);
});

//open target detail modal on dashboard
async function handleOpenTargetDetailModal(e) {
    try {
        e.preventDefault();
        //get url as value of data-attr attribute
        const url = e.currentTarget.dataset.attr;
        //fetch html data from url
        const response = await fetch(url);
        const html = await response.text();
        //insert html data into modal body
        targetDetailModal.querySelector('.modal-body-wrapper').innerHTML = html;
        $('[data-bs-toggle="tooltip"]').tooltip();

    } catch (err) {
        console.log("handleOpenTargetDetailModal", err);
    }
}

async function handleOpenReportTaskModal(e) {
    try {

        e.preventDefault();
        //get url as value of data-attr attribute
        const url = e.currentTarget.dataset.attr;
        //fetch html data from url
        const response = await fetch(url);
        const html = await response.text();
        //insert html data into modal body
        reportTaskModal.querySelector('.modal-body-wrapper').innerHTML = html;
        $('[data-bs-toggle="tooltip"]').tooltip();
    } catch (e) {
        console.log("handleOpenReportTaskModal", err);
    }
}

async function handleOpenTargetLogModal(e) {
    try {
        e.preventDefault();
        const url = e.currentTarget.dataset.attr;
        document.getElementById('target-log-date').textContent = 'Ngày ' + e.currentTarget.dataset.displayDate;
        const response = await fetch(url);
        const html = await response.text();
        targetLogModal.querySelector('.modal-body-wrapper').innerHTML = html;
        onLoadLogModal(targetLogModal);
    } catch (e) {
        console.log("handleOpenTargetLogModal", e);
    }
}

//this function call when target log modal is loaded
//we need to add event listener for target log modal
function onLoadLogModal(modal) {
    //refresh select picker
    $(".selectpicker").selectpicker();
    //reload jquery repeater
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
    //toggle kpi key
    const showKpiKeyCheckBox = modal.querySelector('#form-check_wrapper');
    const kpiWrapper = modal.querySelector('#kpi-wrapper');
    if (kpiWrapper) {
        kpiWrapper.style.display = showKpiKeyCheckBox.checked ? 'block' : 'none';
        showKpiKeyCheckBox.addEventListener('change', (e) => {
            const isChecked = e.target.checked;
            if (isChecked) {
                kpiWrapper.style.display = 'block';
            } else {
                kpiWrapper.style.display = 'none';
            }
        });
    }
    // file upload
    // targetLogModal.querySelector('#upload-file-input').addEventListener('change', updateList);
    // targetLogModal.querySelector('#remove-uploaded-file-btn').addEventListener('click', removeUploaded);
    const fileInput = modal.querySelector('#upload-file-input');
    const removeUploadedBtn = modal.querySelectorAll('.remove-uploaded-file-btn');
    if (fileInput) {
        fileInput.addEventListener('change', e => updateList(e, modal));
    }
    if (removeUploadedBtn) {
        // removeUploadedBtn.addEventListener('click', removeUploaded);
        removeUploadedBtn.forEach(btn => {
            btn.addEventListener('click', removeUploaded);
        });
    }
    //delete log
    //1. target detail log
    const deleteTargetDetailLogBtn = modal.querySelector('#delete-target-log-btn');
    if (deleteTargetDetailLogBtn) {
        deleteTargetDetailLogBtn.addEventListener('click', handleDeleteTargetDetailLog);
    }
    //2. target log
    const deleteTargetLogBtn = modal.querySelector('#delete-report-task-btn');
    if (deleteTargetLogBtn) {
        deleteTargetLogBtn.addEventListener('click', handleDeleteReportTaskLog);
    }

}

async function handleOpenReportTaskLogModal(e) {
    try {
        e.preventDefault();
        //get url as value of data-attr attribute
        const url = e.currentTarget.dataset.attr;
        document.getElementById('report-task-log-date').textContent = 'Ngày ' + e.currentTarget.dataset.displayDate;
        //fetch html data from url
        const response = await fetch(url);
        const html = await response.text();
        //insert html data into modal body
        reportTaskLogModal.querySelector('.modal-body-wrapper').innerHTML = html;
        onLoadLogModal(reportTaskLogModal);

    } catch (e) {
        console.log("handleOpenReportTaskLogModal", e);
    }
}

//file upload helper
function updateList(e, modal) {
    const input = e.target;
    const outPut = modal.querySelector('#upload-list');
    const notSupport = modal.querySelector('.alertNotSupport');

    let children = '';

    const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
    const maxFileSize = 10485760; //10MB in bytes

    for (let i = 0; i < input.files.length; ++i) {
        const file = input.files.item(i);
        //allowedTypes.includes(file.type) &&
        if (file.size <= maxFileSize) {
            children += `<li>
        <span class="fs-5">
            <i class="bi bi-link-45deg"></i> ${file.name}
        </span>
        <span class="modal_upload-remote" onclick="removeFileFromFileList(event, ${i})">
            <img style="width:18px;height:18px" src="/assets/img/trash.svg" />
        </span>
    </li>`;
        } else {

            notSupport.style.display = 'block';
            setTimeout(() => {
                notSupport.style.display = 'none';
            }, 3500);
        }
    }
    outPut.innerHTML = children;
}

//delete file from input
function removeFileFromFileList(event, index) {
    const deleteButton = event.target;
    //get tag name
    const tagName = deleteButton.tagName.toLowerCase();
    let liEl;
    if (tagName == "img") {
        liEl = deleteButton.parentNode.parentNode;
    }
    if (tagName == "span") {
        liEl = deleteButton.parentNode;
    }

    const inputEl = liEl.parentNode.parentNode.querySelector('.modal_upload-input');
    const dt = new DataTransfer()

    const {
        files
    } = inputEl

    for (let i = 0; i < files.length; i++) {
        const file = files[i]
        if (index !== i)
            dt.items.add(file) // here you exclude the file. thus removing it.
    }

    inputEl.files = dt.files // Assign the updates list
    liEl.remove();
}

function removeUploaded(event) {
    const deleteButton = event.target;
    //get tag name
    const tagName = deleteButton.tagName.toLowerCase();
    let liEl;
    if (tagName == "img") {
        liEl = deleteButton.parentNode.parentNode;
    }
    if (tagName == "span") {
        liEl = deleteButton.parentNode;
    }
    liEl.remove();
}


async function handleOpenEditReportModal(e) {
    try {
        e.preventDefault();
        //get url as value of data-attr attribute
        const url = e.currentTarget.dataset.attr;
        //fetch html data from url
        const response = await fetch(url);
        const html = await response.text();
        //insert html data into modal body
        editReportModal.querySelector('.modal-body-wrapper').innerHTML = html;
        $(".selectpicker").selectpicker();
        $('[data-bs-toggle="tooltip"]').tooltip();
        $('.timeSuaVanDe').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            locale: {
                format: 'DD/MM/YYYY'
            }
        });
    } catch (e) {
        console.log("handleOpenEditReportModal", e);
    }
}

async function handleOpenDeleteReportModal(e) {
    try {
        e.preventDefault();
        //get url as value of data-attr attribute
        const url = e.currentTarget.dataset.attr;
        //fetch html data from url
        const response = await fetch(url);
        const html = await response.text();
        //insert html data into modal body
        deleteReportModal.querySelector('.modal-body-wrapper').innerHTML = html;

    } catch (err) {
        console.log("handleOpenDeleteReportModal", err);
    }
}


async function handleOpenConvertReportTaskModal(evt) {
    try {
        evt.preventDefault();
        //get url as value of data-attr attribute
        const url = evt.currentTarget.dataset.attr;
        //fetch html data from url
        const response = await fetch(url);
        const html = await response.text();
        //insert html data into modal body
        convertReportTaskModal.querySelector('.modal-body-wrapper').innerHTML = html;
        $(".selectpicker").selectpicker();
        $('[data-bs-toggle="tooltip"]').tooltip();
        //reload jquery repeater
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
        $(".giaonvuphatsinh.form-control").daterangepicker({
            locale: {
                format: 'DD/MM/YYYY',
            },
            timepicker: false,
        })
    } catch (e) {
        console.log("handleOpenConvertReportTaskModal", e);
    }
}


async function handleDeleteTargetDetailLog(evt) {
    const id = evt.currentTarget.dataset.id;
    if (!id) return
    try {
        const url = API_URL + '/target-log-details/' + id;
        await fetch(url, {
            method: "DELETE",
            headers: {
                'Authorization': 'Bearer ' + JWT_TOKEN,
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        window.location.reload();
    } catch (err) {
        console.log("handleDeleteTargetDetailLog", err);
    }
}


async function handleDeleteReportTaskLog(evt) {
    const id = evt.currentTarget.dataset.id;
    if (!id) return;
    try {
        const url = API_URL + '/report-tasks-logs/' + id;
        await fetch(url, {
            method: "DELETE",
            headers: {
                'Authorization': 'Bearer ' + JWT_TOKEN,
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        window.location.reload();
    } catch (e) {
        console.log("handleDeleteReportTaskLog", e);
    }
}

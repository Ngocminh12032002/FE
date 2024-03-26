const editTargetBtns = document.querySelectorAll('a[data-target="#suaMoiDinhMuc"]');
const editTargetModal = document.querySelector('#suaMoiDinhMuc');

editTargetBtns.forEach(btn => {
    btn.addEventListener('click', handleShowEditTargetModal);
});
async function handleShowEditTargetModal(evt) {
    try {
        evt.preventDefault();
        const url = evt.target.getAttribute('data-attr');
        if (!url) return;
        const modal = new bootstrap.Modal(editTargetModal);
        modal.show();
        const response = await fetch(url);
        const html = await response.text();
        editTargetModal.querySelector('.modal-wrapper').innerHTML = html;
        $(".selectpicker").selectpicker();
    } catch (err) {
        console.log("handleShowEditTargetModal", err);
    }
}


const deleteTargetBtns = document.querySelectorAll('a[data-target="#xoaThuocTinh"]');
const deleteTargetModal = document.querySelector('#xoaThuocTinh');

deleteTargetBtns.forEach(btn => {
    btn.addEventListener('click', handleShowDeleteTargetModal);
});
async function handleShowDeleteTargetModal(evt) {
    try {
        evt.preventDefault();
        const url = evt.target.getAttribute('data-attr');
        const bsModal = new bootstrap.Modal(deleteTargetModal)
        if (!url) {
            return;
        }
        bsModal.show();

        const response = await fetch(url);
        const html = await response.text();
        deleteTargetModal.querySelector('.modal-wrapper').innerHTML = html;

    } catch (err) {
        console.log("handleShowDeleteTargetModal", err);
    }
}

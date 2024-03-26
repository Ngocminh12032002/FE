const deleteFreeProposalBtns = document.querySelectorAll('div[data-bs-target="#xoaDeXuat"]');
const deleteFreeProposalModal = document.querySelector('#xoaDeXuat');

deleteFreeProposalBtns.forEach((btn) => {
    btn.addEventListener('click', handleOpenDeleteFreeProposalModal);
});

async function handleOpenDeleteFreeProposalModal(evt) {
    try {
        const url = evt.currentTarget.dataset.attr;
        if (!url) return;
        console.log(url);
        const res = await fetch(url);
        if (!res.ok) throw new Error(res.statusText);
        const data = await res.text();
        deleteFreeProposalModal.querySelector('.modal-wrapper').innerHTML = data;
    } catch (e) {
        console.log("handleOpenDeleteFreeProposalModal", e);
    }
}

const detailModalBtns = document.querySelectorAll('tr[data-bs-target="#xemDeXuat"]');
const detailModal = document.querySelector('#xemDeXuat');
detailModalBtns.forEach((btn) => {
    btn.addEventListener('click', handleOpenDetailModal);
});
const rejectModal = document.getElementById('rejectModal');
async function handleOpenDetailModal(evt) {
    try {
        const url = evt.currentTarget.dataset.attr;
        console.log(url);
        if (!url) return;
        const resp = await fetch(url);
        if (!resp.ok) throw new Error(resp.statusText);
        const data = await resp.text();
        detailModal.querySelector('.modal-wrapper').innerHTML = data;
        reloadJquery();
        // apply some js logic
        const showReceiverSignatureBtn = detailModal.querySelector('#show-receiver-signature');
        const receiverSignature = detailModal.querySelector('#receiver-signature-img');
        const signatureInput = detailModal.querySelector('#receiver-signature-input');
        if (showReceiverSignatureBtn && receiverSignature && signatureInput) {
            showReceiverSignatureBtn.addEventListener('click', () => {
                receiverSignature.style.display = 'block';
                showReceiverSignatureBtn.style.display = 'none';
                signatureInput.disabled = false;
            });
        }
        //open reject modal
        const openRejectModalBtn = detailModal.querySelector('button[data-bs-target="#rejectModal"]');
        if (openRejectModalBtn) {
            openRejectModalBtn.addEventListener('click', handleShowRejectModal);
        }
    } catch (e) {
        console.log("handleOpenDetailModal", e);
    }
}

async function handleShowRejectModal(evt) {
    try {
        const url = evt.currentTarget.dataset.attr;
        if (!url) return;
        const resp = await fetch(url);
        if (!resp.ok) throw new Error(resp.statusText);
        const data = await resp.text();
        rejectModal.querySelector('.modal-wrapper').innerHTML = data;

    } catch (e) {
        console.log("handleShowRejectModal", e);
    }
}

function reloadJquery() {
    $(".selectpicker").selectpicker();
    $('#suaCreateUser').datetimepicker({
        format: 'd/m/Y',
        timepicker: false,
    });
}

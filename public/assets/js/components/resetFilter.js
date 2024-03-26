// Chỉ dùng cho select có thuộc tính selectpicker
// thêm class select_filter để hoạt động
// thêm vào nút cần hành động => onclick="resetFilters()"
function resetFilters() {
    const selectPickers = document.querySelectorAll('.select_filter');
    console.log(selectPickers);
    selectPickers.forEach(selectpicker => {
        selectpicker.value = '';
        $(selectpicker).selectpicker('refresh');
    });
}
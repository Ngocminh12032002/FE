
// Tạo lại class textareaResize khi thêm row
$(document).ready(function () {
    $('.DNTT_repeater, .DNTU_repeater, .YCMS_repeater, .QTTU_repeater, .QTTU_repeater_2, .MTCV1_repeater, .YCTK_repeater, DN_repeater').on('click', '[data-repeater-create]', function () {
        var textareas = $(this).parents('.DNTT_repeater, .DNTU_repeater, .YCMS_repeater, .QTTU_repeater, .QTTU_repeater_2, DN_repeater .MTCV1_repeater, .YCTK_repeater').find('.textareaResize');
        textareas.each(function () {
            $(this).on('keydown', autosize);
        });
    });
});

var textareas = document.querySelectorAll(".textareaResize");
textareas.forEach(function (textarea) {
    textarea.addEventListener("keydown", autosize);
});

function autosize() {
    var el = this;
    setTimeout(function () {
        el.style.setProperty("height", "auto");
        // el.style.setProperty('padding', '0');
        el.style.setProperty("-moz-box-sizing", "content-box");
        // el.style.setProperty("height", el.scrollHeight + "px");
    }, 100);
}
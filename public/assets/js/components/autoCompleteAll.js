// Tắt gợi ý trong form
$(document).ready(function () {
    $("form").attr("autocomplete", "off");
});

// bắt autocomplete theo name
window.addEventListener("load", function () {
    var inputFields = document.getElementsByTagName("input");
    for (var i = 0; i < inputFields.length; i++) {
        var inputType = inputFields[i].getAttribute("type");
        if (inputType === "name") {
            inputFields[i].setAttribute("autocomplete", "off");
            inputFields[i].setAttribute("role", "presentation");
        } else if (inputType === "password") {
            inputFields[i].setAttribute("autocomplete", "new-password");
        } else if (inputType === "email") {
            inputFields[i].setAttribute("autocomplete", "off");
            inputFields[i].setAttribute("role", "presentation");
        } else {
            inputFields[i].setAttribute("autocomplete", "off");
            inputFields[i].setAttribute("role", "presentation");
        }
    }
});

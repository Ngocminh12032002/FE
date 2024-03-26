// {/* <input class="form-check-input" type="checkbox" value="" id="checkcheeck" style="width:20px;height:20px; background-color:#ededed" onchange="disableFields(this)"></input> */}
// Thêm vào thẻ td mới hoạt động.. chức năng sẽ disable input + textarea
function disableFields(checkbox) {
    var row = checkbox.parentNode.parentNode;
    var tds = row.getElementsByTagName("td");

    for (var i = 1; i < tds.length - 3; i++) {
        var td = tds[i];
        var inputs = td.getElementsByTagName("input");
        var textareas = td.getElementsByTagName("textarea");

        for (var j = 0; j < inputs.length; j++) {
            var input = inputs[j];
            input.disabled = checkbox.checked;
        }

        for (var k = 0; k < textareas.length; k++) {
            var textarea = textareas[k];
            textarea.disabled = checkbox.checked;
        }
    }
}

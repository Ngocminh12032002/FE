// SELECT MULTIPLE LEFT SIDEBAR
const select = document.getElementById('select');
const elems = document.querySelectorAll('.data_chart-items');
const obj = {};

const filtered = [...elems].filter((el) => {
    if (!obj[el.id]) {
        obj[el.id] = true;
        return true;
    } else {
        return false;
    }
});

const selectOpt = filtered.map((el) => {
    el.style.display = 'block';
    return `<option> ${el.id} </option>`;
});

select.innerHTML = selectOpt.join('');

select.addEventListener('change', function() {
    const noPick = document.getElementById('data_chart-nopick');
    let countSelected = 0;

    for (let i = 0, iLen = select.options.length; i < iLen; i++) {
        const opt = select.options[i];
        const val = opt.value || opt.text;

        if (opt.selected) {
            document.getElementById(val).style.display = 'block';
            countSelected++;
        } else {
            document.getElementById(val).style.display = 'none';
        }
    }

    if (countSelected === 0) {
        noPick.style.display = 'block';
    } else {
        noPick.style.display = 'none';
    }
});

// BTN SETTINGS
document.getElementById('sidebarBody_settings-body').addEventListener('click', handleClickSettings, false);

function handleClickSettings() {
    const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
    if (sidebarBodySelectWrapper.style.display === 'none') {
        sidebarBodySelectWrapper.style.display = 'block';
        document.addEventListener('click', handleClickOutside);
    } else {
        sidebarBodySelectWrapper.style.display = 'none';
        document.removeEventListener('click', handleClickOutside);
    }
}

function handleClickOutside(event) {
    const sidebarBodySettings = document.getElementsByClassName('sidebarBody_settings-body')[0];
    const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
    if (!sidebarBodySettings.contains(event.target) && !sidebarBodySelectWrapper.contains(event.target)) {
        sidebarBodySelectWrapper.style.display = 'none';
        document.removeEventListener('click', handleClickOutside);
    }
}
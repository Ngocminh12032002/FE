/*---------------------------------------------
Template name :  DWT
Version       :  1.0
Author        :  Duc Minh Vu
Author url    :  https://publicsite.pro

** Custom JS
----------------------------------------------*/

document.addEventListener("DOMContentLoaded", () => {
    "use strict";

    // Preloader
    const preloader = document.querySelector("#loader");
    if (preloader) {
        window.addEventListener("load", () => {
            preloader.remove();
        });
    }

    // CHANGE TITLE
    // const docTitle = document.title;
    // window.addEventListener('blur', () => {
    //     document.title = 'Hãy tập trung làm việc 🤟';
    // });

    // window.addEventListener('focus', () => {
    //     document.title = docTitle;
    // });

    // BTN SHOW/HIDE LEFT RIGHT
    const mainWrap = document.getElementById("mainWrap");
    const asideLeft = document.getElementById("aside-left");
    const asideRight = document.getElementById("aside-right");
    const btnCloseLeft = document.getElementById("btn-left");
    const btnCloseRight = document.getElementById("btn-right");

    function updateVariables() {
        const root = document.documentElement;
        const width = getComputedStyle(root)
            .getPropertyValue("--width-sidebar")
            .trim();
        asideLeft.style.width = width;
        asideRight.style.width = width;
    }

    updateVariables();

    btnCloseLeft.onclick = function () {
        const isClosed =
            asideLeft.style.left ===
            `-${getComputedStyle(asideLeft).getPropertyValue("width").trim()}`;
        asideLeft.style.left = isClosed
            ? "0"
            : `-${getComputedStyle(asideLeft)
                  .getPropertyValue("width")
                  .trim()}`;
        mainWrap.style.marginLeft = isClosed
            ? getComputedStyle(asideLeft).getPropertyValue("width").trim()
            : "0";
    };

    btnCloseRight.onclick = function () {
        const isClosed =
            asideRight.style.right ===
            `-${getComputedStyle(asideRight).getPropertyValue("width").trim()}`;
        asideRight.style.right = isClosed
            ? "0"
            : `-${getComputedStyle(asideRight)
                  .getPropertyValue("width")
                  .trim()}`;
        mainWrap.style.marginRight = isClosed
            ? getComputedStyle(asideRight).getPropertyValue("width").trim()
            : "0";
    };

    function autoCloseSidebar() {
        const screenWidth = window.innerWidth;
        if (screenWidth > 1080 && screenWidth < 1440) {
            asideLeft.style.left = `-${getComputedStyle(asideLeft)
                .getPropertyValue("width")
                .trim()}`;
            asideRight.style.right = `-${getComputedStyle(asideRight)
                .getPropertyValue("width")
                .trim()}`;
            mainWrap.style.marginLeft = "0";
            mainWrap.style.marginRight = "0";

            // Thay đổi icon khi đóng cả hai aside
            const btnLeftIcon = document.querySelector("#btn-left i");
            const btnRightIcon = document.querySelector("#btn-right i");
            if (btnLeftIcon.classList.contains("bi-arrow-bar-left")) {
                btnLeftIcon.classList.remove("bi-arrow-bar-left");
                btnLeftIcon.classList.add("bi-arrow-bar-right");
            }
            if (btnRightIcon.classList.contains("bi-arrow-bar-right")) {
                btnRightIcon.classList.remove("bi-arrow-bar-right");
                btnRightIcon.classList.add("bi-arrow-bar-left");
            }
            // Update
            document.getElementById("btn-left").style.right = "-26px";
            document.querySelectorAll("#btn-left i").forEach((i) => {
                i.style.padding = "16px 10px 16px 4px";
            });
            document.getElementById("btn-right").style.left = "-26px";
            document.querySelectorAll("#btn-right i").forEach((i) => {
                i.style.padding = "16px 10px 16px 4px";
            });
        } else {
            // Reset
            document.getElementById("btn-left").style.right = "";
            document.querySelectorAll("#btn-left i").forEach((i) => {
                i.style.padding = "";
            });
            document.getElementById("btn-right").style.left = "";
            document.querySelectorAll("#btn-right i").forEach((i) => {
                i.style.padding = "";
            });
            updateVariables();
        }
    }

    window.addEventListener("load", autoCloseSidebar);
    window.addEventListener("resize", autoCloseSidebar);

    function handleChangeIconLeft(icon) {
        if (icon.classList.contains("bi-arrow-bar-left")) {
            icon.classList.remove("bi-arrow-bar-left");
            icon.classList.add("bi-arrow-bar-right");
            // Update
            document.getElementById("btn-left").style.right = "-26px";
            document.querySelectorAll("#btn-left i").forEach((i) => {
                i.style.padding = "16px 10px 16px 4px";
            });
        } else {
            icon.classList.remove("bi-arrow-bar-right");
            icon.classList.add("bi-arrow-bar-left");
            // Reset
            document.getElementById("btn-left").style.right = "";
            document.querySelectorAll("#btn-left i").forEach((i) => {
                i.style.padding = "";
            });
        }
    }
    function handleChangeIconRight(icon) {
        if (icon.classList.contains("bi-arrow-bar-right")) {
            icon.classList.remove("bi-arrow-bar-right");
            icon.classList.add("bi-arrow-bar-left");
            // Update
            document.getElementById("btn-right").style.left = "-26px";
            document.querySelectorAll("#btn-right i").forEach((i) => {
                i.style.padding = "16px 10px 16px 4px";
            });
        } else {
            icon.classList.remove("bi-arrow-bar-left");
            icon.classList.add("bi-arrow-bar-right");
            // Reset
            document.getElementById("btn-right").style.left = "";
            document.querySelectorAll("#btn-right i").forEach((i) => {
                i.style.padding = "";
            });
        }
    }

    document.getElementById("btn-left").addEventListener("click", function () {
        handleChangeIconLeft(document.querySelector("#btn-left i"));
    });
    document.getElementById("btn-right").addEventListener("click", function () {
        handleChangeIconRight(document.querySelector("#btn-right i"));
    });
});

// Reset form when click outside modal
$(
    "#themThanhVien, #themTrangBi, #themCapNhanSu, #themDSCapToChuc, #themDSThemViTri, #themCoCauToChuc, #themMoiDinhMuc, #themChiSoKey, #giaoViecPhatSinh, #neuvande, #taoDeXuat, #taoYeuCau, #taoQuyTrinh"
).on("hidden.bs.modal", function () {
    $(this).find("form").trigger("reset");
    // $('.modal-body').find('input').val('');
    $(".modal-body").find("textarea").val("");
    $(this).find("select.selectpicker").selectpicker("val", "");
    // $(this).find("select.selectpicker").selectpicker("refresh");
});

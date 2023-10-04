// JavaScript untuk menampilkan dan menyembunyikan popup
document.addEventListener("DOMContentLoaded", function () {
    const openPopupButton = document.getElementById("openPopup");
    const popup = document.getElementById("popup");
    const closePopupButton = document.getElementById("tooltip-fashion-close");

    openPopupButton.addEventListener("click", function () {
        popup.style.display = "flex";
    });

    closePopupButton.addEventListener("click", function () {
        popup.style.display = "none";
    });
});

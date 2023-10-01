// JavaScript untuk menampilkan dan menyembunyikan popup
document.addEventListener("DOMContentLoaded", function () {
    const openPopupButton = document.getElementById("openPopup");
    const popup = document.getElementById("popup");
    const closePopupButton = document.getElementById("closePopup");
    
    openPopupButton.addEventListener("click", function () {
        popup.style.display = "block";
    });

    closePopupButton.addEventListener("click", function () {
        popup.style.display = "none";
    });
});

$(document).ready(function () {
    $("#tooltip-ecostore").on("click", function () {
        $(".tooltip-ecostore-chatbox-overlay").css("display", "flex");
    });

    $("#tooltip-ecostore-close").on("click", function () {
        $(".tooltip-ecostore-chatbox-overlay").css("display", "none");
    });

    // Ambil elemen-elemen yang diperlukan
    const openButton = document.getElementById("openPopup");
    const popup = document.getElementById("popupContainer");
    const closeButton = document.getElementById("tooltip-booth-close");

    // Fungsi untuk membuka pop-up
    function openPopup() {
        popup.style.display = "flex";
    }

    // Fungsi untuk menutup pop-up
    function closePopup() {
        popup.style.display = "none";
    }

    // Tambahkan event listener ke tombol pembuka
    openButton.addEventListener("click", openPopup);

    // Tambahkan event listener ke tombol penutup
    closeButton.addEventListener("click", closePopup);
});

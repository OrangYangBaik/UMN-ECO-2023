$(document).ready(function () {
    $("#locationSelect").on("change", function () {
        const selectedValue = this.value;
        const redirectUrls = {
            1: "balai_kota.html",
            2: "carnival.html",
            3: "toko_baju.html",
            4: "gedung_kesenian.html",
            5: "pasar.html",
        };
        if (selectedValue in redirectUrls) {
            window.location.href = redirectUrls[selectedValue];
        }
    });

    $("#scanner-utama").on("click", function () {
        $(this).fadeOut();
        $(
            ".scanner-merchandise, .scanner-dapat-kupon, .scanner-tukar-kupon, .scanner-quest, .scanner-arcade"
        ).show();
    });

    function showChatBox(boxId) {
        $("." + boxId).fadeIn("slow");
        setTimeout(() => {
            $("." + boxId).fadeOut();
        }, 5000);
    }

    $(".wehea-currency-section").on("click", function () {
        const boxId = $(this)
            .attr("id")
            .replace("floating-icon-", "floating-chatbox-");
        showChatBox(boxId);
    });
});

$(document).ready(function () {
    $("#locationSelect").on("change", function () {
        const selectedValue = this.value;
        const redirectUrls = {
            1: "/wehea",
            2: "/wehea/carnival",
            3: "toko_baju.html",
            4: "/wehea/gedung kesenian",
            5: "pasar.html",
        };
        if (selectedValue in redirectUrls) {
            window.location.href = redirectUrls[selectedValue];
        }
    });

    $("#scanner-utama").on("click", function () {
        $(this).fadeOut();
        $(
            ".scanner-merchandise, .scanner-dapat-kupon, .scanner-tukar-kupon, .scanner-quest, .scanner-arcade, .scanner-close"
        ).show();
    });

    $(".scanner-close").on("click", function () {
        $(
            ".scanner-merchandise, .scanner-dapat-kupon, .scanner-tukar-kupon, .scanner-quest, .scanner-arcade, .scanner-close"
        ).hide();
        $("#scanner-utama").fadeIn();
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

    $(".scanner-arcade").on("click", function () {
        window.location.href = "/wehea/scannerPageMain";
    });

    $(".scanner-quest").on("click", function () {
        window.location.href = "/wehea/scannerPageDapatCredit";
    });
    $(".scanner-dapat-kupon").on("click", function () {
        window.location.href = "/wehea/scannerPageDapatKupon";
    });
    $(".scanner-tukar-kupon").on("click", function () {
        window.location.href = "/wehea/scannerPageKurangKupon";
    });
    $(".scanner-merchandise").on("click", function () {
        window.location.href = "/wehea/scannerPageMerchandise";
    });
});

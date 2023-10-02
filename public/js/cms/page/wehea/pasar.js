$(document).ready(function () {
    $("#tooltip-ecostore").on("click", function () {
        $(".tooltip-ecostore-chatbox-overlay").css("display", "flex");
    });

    $("#tooltip-ecostore-close").on("click", function () {
        $(".tooltip-ecostore-chatbox-overlay").css("display", "none");
    });
});

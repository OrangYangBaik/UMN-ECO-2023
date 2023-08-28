$(document).ready(function () {
    $(".jnana-sanka").click(function () {
        $("body").css("overflow", "hidden");
        $(".jnana-overlay-container")
            .css("display", "flex")
            .css("opacity", "1");
    });

    $(".jnana-overlay-container").click(function (event) {
        if (!$(event.target).hasClass("unclickable-close")) {
            $("body").css("overflow", "auto");
            $(".jnana-overlay-container").css("opacity", "0");
            setTimeout(function () {
                $(".jnana-overlay-container").hide();
            }, 500);
        }
    });

    var hoverSound = $("#hover-sound")[0];
    $(".hoverable-obj" || ".nav-link").hover(
        function () {
            hoverSound.currentTime = 5;
            hoverSound.play();
        },
        function () {
            hoverSound.pause();
        }
    );
});

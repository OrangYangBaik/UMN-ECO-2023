$(document).ready(function () {
    $(".jnana-sanka").click(function () {
        $("body").css("overflow", "hidden");
        $(".jnana-overlay-container").css("display", "flex");
    });

    $(".jnana-overlay-container").click(function (event) {
        if (!$(event.target).hasClass("overlay-content")) {
            $("body").css("overflow", "auto");
            $(".jnana-overlay-container").hide();
        }
    });

    var hoverSound = $("#hover-sound")[0]; // Get the audio element
    $(".hoverable-obj").hover(
        function () {
            hoverSound.currentTime = 4;
            hoverSound.play();
        },
        function () {
            hoverSound.pause();
        }
    );
});

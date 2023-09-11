$(document).ready(function () {
    // $(".jnana-sanka").click(function () {
    //     $("body").css("overflow", "hidden");
    //     $(".jnana-overlay-container")
    //         .css("display", "flex")
    //         .css("opacity", "1");
    // });

    // $(".jnana-overlay-container").on("click", function (event) {
    //     if ($(event.target).hasClass("jnana-overlay-container")) {
    //         $("body").css("overflow", "auto");
    //         $(".jnana-overlay-container").css("opacity", "0");
    //         setTimeout(function () {
    //             $(".jnana-overlay-container").hide();
    //         }, 500);
    //     }
    // });

    var hoverSound = $("#hover-sound")[0];
    var playPromise;

    function playHoverSound() {
        if (hoverSound.paused || hoverSound.ended) {
            hoverSound.currentTime = 0;
            playPromise = hoverSound.play();

            if (playPromise !== undefined) {
                playPromise.catch((error) => {
                    // Auto-play was prevented, but we ignore the error and continue playing.
                });
            }
        }
    }

    function pauseHoverSound() {
        hoverSound.pause();
    }

    $(".hoverable-obj, .nav-link").on({
        mouseenter: playHoverSound,
        mouseleave: pauseHoverSound,
    });

    $(".nawasena").click(function () {
        const overlayImage = $("#overlay-image");
        const nawasenaImageSrc = $(this).find("img").attr("src");
        const nawasenaImageAlt = $(this).find("img").attr("alt");

        overlayImage.attr("src", nawasenaImageSrc);
        overlayImage.attr("alt", nawasenaImageAlt);

        $("body").css("overflow", "hidden");
        $(".overlay-container").css("display", "flex");

        setTimeout(function () {
            window.location.href = "/nawasena";
        }, 3000);
    });

    // $(".wehea").click(function () {
    //     location.href = "/wehea";
    // });
});

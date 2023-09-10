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
    $(".hoverable-obj, .nav-link").hover(
        function () {
            hoverSound.currentTime = 5;
            hoverSound.play();
        },
        function () {
            hoverSound.pause();
        }
    );

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

    $(".wehea").click(function () {
        location.href = "/wehea";
    });
});

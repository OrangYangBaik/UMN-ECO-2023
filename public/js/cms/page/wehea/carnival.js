$(document).ready(function () {
    function showPopup1() {
        $("#popup1").fadeIn("slow");
        $(".backdrop-filter").css("visibility", "visible"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "1"); // Show backdrop-filter
    }
    function showPopup2() {
        $("#popup2").fadeIn("slow");
        $(".backdrop-filter").css("visibility", "visible"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "1"); // Show backdrop-filter
    }
    function showPopup3() {
        $("#popup3").fadeIn("slow");
        $(".backdrop-filter").css("visibility", "visible"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "1"); // Show backdrop-filter
    }
    function showPopup4() {
        $("#popup4").fadeIn("slow");
        $(".backdrop-filter").css("visibility", "visible"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "1"); // Show backdrop-filter
    }
    function showPopup5() {
        $("#popup5").fadeIn("slow");
        $(".backdrop-filter").css("visibility", "visible"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "1"); // Show backdrop-filter
    }

    // Click event to trigger the showPopup1 function
    $(".button-tenda-merah").on("click", function () {
        showPopup1();
    });
    $(".button-tenda-oren").on("click", function () {
        showPopup2();
    });
    $(".button-tenda-kuning").on("click", function () {
        showPopup3();
    });
    $(".button-tenda-biru-tua").on("click", function () {
        showPopup4();
    });
    $(".button-tenda-biru-muda").on("click", function () {
        showPopup5();
    });

    // Close button event (if needed)
    $("#popup1 .button-kembali").on("click", function () {
        $("#popup1").fadeOut("slow");
        $(".backdrop-filter").css("visibility", "hidden"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "0"); // Show backdrop-filter
    });

    $("#popup2 .button-kembali").on("click", function () {
        $("#popup2").fadeOut("slow");
        $(".backdrop-filter").css("visibility", "hidden"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "0"); // Show backdrop-filter
    });
    $("#popup3 .button-kembali").on("click", function () {
        $("#popup3").fadeOut("slow");
        $(".backdrop-filter").css("visibility", "hidden"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "0"); // Show backdrop-filter
    });
    $("#popup4 .button-kembali").on("click", function () {
        $("#popup4").fadeOut("slow");
        $(".backdrop-filter").css("visibility", "hidden"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "0"); // Show backdrop-filter
    });
    $("#popup5 .button-kembali").on("click", function () {
        $("#popup5").fadeOut("slow");
        $(".backdrop-filter").css("visibility", "hidden"); // Show backdrop-filter
        $(".backdrop-filter").css("opacity", "0"); // Show backdrop-filter
    });
});

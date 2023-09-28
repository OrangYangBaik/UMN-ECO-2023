$(document).ready(function () {
    function showChatBox(boxId) {
        $("." + boxId).fadeIn("slow");
        const thisClicked = boxId.replace("chat-box-", "");
        setTimeout(() => {
            $("." + boxId).fadeOut();
            $(".wehea-tooltip-" + thisClicked).fadeIn("slow");
        }, 5000);
    }

    $(".wehea-kucing, .wehea-burung, .wehea-kukang").click(function () {
        const targetTooltipId = $(this).attr("id").replace("wehea-", "");
        $(".wehea-tooltip-" + targetTooltipId).click();
    });

    $(".wehea-tooltip").on("click", function () {
        const boxId = $(this).attr("id").replace("tooltip-", "chat-box-");
        showChatBox(boxId);
        $(this).fadeOut();
    });

    $(".wehea-air-mancur, .wehea-tooltip-2-air-mancur").on(
        "click",
        function () {
            $(".balai-kota-air-mancur-overlay").css("display", "flex");
        }
    );

    $(".back-button-air-mancur").on("click", function (event) {
        $(".balai-kota-air-mancur-overlay").hide();
    });

    $(".wehea-papan-pengumuman, .wehea-tooltip-2-papan-pengumuman").on(
        "click",
        function () {
            $(".balai-kota-papan-pengumuman-overlay").css("display", "flex");
        }
    );

    $(".back-button-papan-pengumuman").on("click", function () {
        $(".balai-kota-papan-pengumuman-overlay").hide();
    });

    $(".wehea-poster-daftar-wehea").on("click", function () {
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        var headers = {
            "X-CSRF-TOKEN": csrfToken,
        };
        $.ajax({
            type: "POST",
            url: "/wehea/register",
            headers: headers,
            success: function (response) {
                console.log(response);
                window.location.reload();
            },
            error: function (error) {
                if (error.status === 401)
                    window.location.href = "/wehea/restricted";
            },
        });
    });
});

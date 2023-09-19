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
});

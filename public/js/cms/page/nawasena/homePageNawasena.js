$(document).ready(function () {
    $(".nawasena-reg").click(function () {
        $("body").css("overflow", "hidden");
        $(".nawasena-form-overlay-container")
            .css("display", "flex")
            .css("opacity", "1");
    });

    $(".nawasena-form-overlay-container").on("click", function (event) {
        if ($(event.target).hasClass("nawasena-form-overlay-container")) {
            $("#ss-pembayaran").val("");
            $("#uploaded-file-name").text("");
            $("body").css("overflow", "auto");
            $(".nawasena-form-overlay-container").css("opacity", "0");
            setTimeout(function () {
                $(".nawasena-form-overlay-container").hide();
            }, 500);
        }
    });

    $("#ss-pembayaran").change(function () {
        const fileName = $(this).val().split("\\").pop(); // Extract the file name from the input value
        $("#uploaded-file-name").text("Uploaded file: " + fileName);
    });

    $("#submit-ss").submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "/nawasena/pengumpulanNawasena",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
            },
            error: function (xhr, status, error) {
                var errors = xhr.responseJSON.errors;
                if (errors) {
                    $("#error-message").text(errors?.bukti[0]);
                }
            },
        });
    });
});

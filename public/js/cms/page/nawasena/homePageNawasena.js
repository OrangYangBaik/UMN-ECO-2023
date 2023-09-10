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
        $("#uploaded-file-name").text(fileName);
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
                if (response.redirect) {
                    window.location.href = response.redirect;
                } else {
                    if (response.status === "error") {
                        $("#success-message").hide();
                        $("#success-message").text("");
                        $("#error-message").text(response.message);
                        $("#error-message").show();
                        $("#link-grup").show();
                    } else if (response.status === "success") {
                        $("#error-message").hide();
                        $("#error-message").text("");
                        $("#success-message").text(response.message);
                        $("#success-message").show();
                        $("#link-grup").show();
                    }
                    $("#link-grup").attr("href", response.link);
                    $("#link-grup").show();
                }
            },
            error: function (xhr, status, error) {
                var errors = xhr.responseJSON?.errors;
                if (errors) {
                    $("#error-message").text(errors?.bukti[0]);
                    $("#error-message").show();
                }
            },
        });
    });
});

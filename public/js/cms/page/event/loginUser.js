$(document).ready(function () {
    jQuery.validator.addMethod(
        "correct_email_umn",
        function (value, element) {
            return (
                this.optional(element) ||
                /^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/.test(
                    value
                )
            );
        },
        "Email harus menggunakan email student atau email dari UMN"
    );

    $("#form-login").validate({
        rules: {
            "email-student": {
                required: true,
                correct_email_umn: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            "email-student": {
                required: "Anda perlu mengisi email Anda!",
            },
            password: {
                required: "Anda perlu mengisi password Anda!",
            },
        },
    });
});

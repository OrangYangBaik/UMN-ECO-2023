$(document).ready(function () {
    jQuery.validator.setDefaults({
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
    });

    jQuery.validator.addMethod(
        "name_validation",
        function (value, element) {
            return this.optional(element) || /^[a-z ]+$/i.test(value);
        },
        "Nama tidak boleh mengandung angka ataupun simbol"
    );

    jQuery.validator.addMethod(
        "correct_email_student",
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

    jQuery.validator.addMethod(
        "correct_nim_umn",
        function (value, element) {
            return this.optional(element) || /^000000[0-9]+$/.test(value);
        },
        "NIM yang Anda masukkan salah!"
    );

    jQuery.validator.addMethod(
        "unique_nim",
        function (value, element) {
            let check = true;
            for (let i = 0; i < nim_list.length; ++i) {
                if (nim_list[i] === value.replace(/^0+/, "")) {
                    check = false;
                }
            }
            return check;
        },
        "NIM Anda sudah terdaftar"
    );

    jQuery.validator.addMethod(
        "unique_email",
        function (value, element) {
            let check = true;
            for (let i = 0; i < email_list.length; ++i) {
                if (email_list[i].toLowerCase() === value.toLowerCase()) {
                    check = false;
                }
            }
            return check;
        },
        "Email Anda sudah terdaftar"
    );

    jQuery.validator.addMethod(
        "unique_instagram",
        function (value, element) {
            let check = true;
            for (let i = 0; i < instagram_list.length; ++i) {
                if (instagram_list[i].toLowerCase() === value.toLowerCase()) {
                    check = false;
                }
            }
            return check;
        },
        "Instagram yang digunakan sudah terdaftar!"
    );

    jQuery.validator.addMethod(
        "unique_line",
        function (value, element) {
            let check = true;
            for (let i = 0; i < line_list.length; ++i) {
                if (line_list[i].toLowerCase() === value.toLowerCase()) {
                    check = false;
                }
            }
            return check;
        },
        "ID Line yang digunakan sudah terdaftar!"
    );

    $("#form-register").validate({
        rules: {
            name: {
                required: true,
                name_validation: true,
            },
            nim: {
                required: true,
                digits: true,
                minlength: 11,
                maxlength: 11,
                correct_nim_umn: true,
                unique_nim: true,
            },
            "email-student": {
                required: true,
                correct_email_student: true,
                unique_email: true,
            },
            angkatan: {
                required: true,
            },
            fakultas: {
                required: true,
            },
            "program-studi": {
                required: true,
            },
            instagram: {
                required: true,
                unique_instagram: true,
            },
            "id-line": {
                required: true,
                unique_line: true,
            },
            password: {
                required: true,
            },
            "confirmation-password": {
                required: true,
                equalTo: "#password",
            },
        },
        messages: {
            name: {
                required: "Anda perlu mengisi nama Anda!",
            },
            nim: {
                required: "Anda perlu mengisi NIM Anda!",
                digits: "NIM harus berupa angka!",
                minlength: "NIM yang Anda masukkan tidak valid!",
                maxlength: "NIM yang Anda masukkan tidak valid!",
            },
            "email-student": {
                required: "Anda perlu mengisi Email Student Anda!",
            },
            angkatan: {
                required: "Anda perlu mengisi angkatan Anda!",
            },
            fakultas: {
                required: "Anda perlu mengisi fakultas Anda!",
            },
            "program-studi": {
                required: "Anda perlu mengisi program studi Anda!",
            },
            instagram: {
                required: "Anda perlu mengisi akun Instagram Anda!",
            },
            "id-line": {
                required: "Anda perlu mengisi ID Line Anda!",
            },
            password: {
                required: "Anda perlu mengisi password Anda!",
            },
            "confirmation-password": {
                required: "Anda perlu mengisi konfirmasi password!",
                equalTo: "Konfirmasi password harus sama dengan password",
            },
        },
    });
});

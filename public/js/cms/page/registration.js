$(document).ready(function () {
    jQuery.validator.setDefaults({
        errorPlacement: function (error, element) {
            if (element.attr("name") === "Availability") {
                $("#uploadFile").addClass("error");
                error.insertAfter(".check-2");
            } else {
                error.insertAfter(element);
            }
        },
    });
    jQuery.validator.addMethod(
        "emailstudent",
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
        "regexeco",
        function (value, element) {
            return this.optional(element) || /^[a-z ]+$/i.test(value);
        },
        "Nama tidak boleh mengandung angka ataupun simbol"
    );
    jQuery.validator.addMethod("regexnim", function (value, element) {
        return this.optional(element) || /^000000[0-9]+$/.test(value);
    });
    // Unique identifier
    // jQuery.validator.addMethod('unique_studentid', function (value, element) {
    //     let check = true;
    //     for (let i = 0; i < NIM_list.length; ++i) {
    //         if (NIM_list[i].toLowerCase() === value.toLowerCase().replace(/^0+/, '')) {
    //             check = false;
    //         }
    //     }
    //     return check;
    // }, "NIM Anda sudah terdaftar"
    // );
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
        "Akun instagram Anda sudah terdaftar"
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
        "Akun line Anda sudah terdaftar"
    );
    jQuery.validator.addMethod(
        "unique_phone",
        function (value, element) {
            let check = true;
            for (let i = 0; i < phone_list.length; ++i) {
                if (phone_list[i].toLowerCase() === value.toLowerCase()) {
                    check = false;
                }
            }
            return check;
        },
        "Nomor telepon Anda sudah terdaftar"
    );

    $("#form-register").validate({
        rules: {
            Name: {
                required: true,
                regexeco: true,
            },
            NIM: {
                required: true,
                digits: true,
                regexnim: true,
                minlength: 11,
                maxlength: 11,
                // unique_studentid: true,
            },
            Email: {
                required: true,
                emailstudent: true,
                unique_email: true,
            },
            Jurusan: {
                required: true,
            },
            Angkatan: {
                required: true,
            },
            Instagram_account: {
                required: true,
                unique_instagram: true,
            },
            Line_id: {
                required: true,
                unique_line: true,
            },
            Phone_number: {
                required: true,
                digits: true,
                minlength: 11,
                maxlength: 13,
                unique_phone: true,
            },
            Pengetahuan: {
                required: true,
            },
            Kesibukan: {
                required: true,
            },
            Experience: {
                required: true,
            },
            Alasan1: {
                required: true,
            },
            Alternative: {
                required: true,
            },
            Alasan2: {
                required: true,
            },
            Pengalaman_dokum: {
                required: true,
            },
            LinkDrive: {
                required: true,
            },
        },
        messages: {
            Name: {
                required: "Anda perlu mengisi nama Anda",
                regexeco: "Nama tidak boleh mengandung angka ataupun simbol",
            },
            NIM: {
                required: "Anda perlu mengisi NIM Anda",
                digits: "NIM harus berupa angka",
                regexnim: "Format NIM yang Anda masukkan salah",
                minlength: "NIM yang Anda masukkan tidak valid",
                maxlength: "NIM yang Anda masukkan tidak valid",
                // unique_studentid: 'NIM Anda sudah terdaftar!'
            },
            Email: {
                required: "Anda perlu mengisi email Anda",
                emailstudent: "Email harus menggunakan email student",
                unique_email: "Email Anda sudah terdaftar!",
            },
            Jurusan: {
                required: "Anda perlu mengisi jurusan Anda",
            },
            Angkatan: {
                required: "Anda perlu mengisi angkatan Anda",
            },
            Instagram_account: {
                required: "Anda perlu mengisi nama akun instagram Anda",
                unique_instagram: "Akun instagram Anda sudah terdaftar!",
            },
            Line_id: {
                required: "Anda perlu mengisi id line Anda",
                unique_line: "Akun Line Anda sudah terdaftar!",
            },
            Phone_number: {
                required: "Anda perlu mengisi nomor telepon Anda",
                minlength: "Nomor telepon terlalu pendek",
                maxlength: "Nomor telepon terlalu panjang",
                digits: "Nomor telepon harus berupa angka",
                unique_phone: "Nomor telepon Anda sudah terdaftar!",
            },
            Pengetahuan: {
                required: "Tuliskan apa yang Anda ketahui tentang UMN ECO!",
            },
            Kesibukan: {
                required: "Tuliskan kesibukan Anda!",
            },
            Experience: {
                required: "Tuliskan pengalaman organisasi Anda!",
            },
            Alasan1: {
                required:
                    "Anda perlu menuliskan alasan memilih divisi tersebut!",
            },
            Alternative: {
                required:
                    "Anda perlu menuliskan divisi alternatif yang Anda pilih!",
            },
            Alasan2: {
                required:
                    "Anda perlu menuliskan alasan memilih divisi tersebut!",
            },
            Pengalaman_dokum: {
                required:
                    "Anda perlu menuliskan pengalaman editing video atau foto!",
            },
            LinkDrive: {
                required: "Anda perlu memasukkan link google drive!",
            },
        },
    });
});

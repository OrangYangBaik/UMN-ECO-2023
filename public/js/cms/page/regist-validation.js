jQuery.validator.addMethod("emailstudent", function (value, element) {
    return this.optional(element) || /^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/.test(value);
}, "Email harus menggunakan email student atau email dari UMN"
);
jQuery.validator.addMethod("regexeco", function (value, element) {
  return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Nama tidak boleh mengandung angka ataupun simbol"
);
jQuery.validator.addMethod("regexnim", function (value, element) {
  return this.optional(element) || /^000000[0-9]+$/.test(value);
}, 
);
$( "#form-regist" ).validate({
rules: {
  email_student: {
    required: true,
    emailstudent: true
  },
  password: {
      required: true,
      minlength: 8,
  },
  nama: {
      required: true,
      regexeco: true,
  },
  nim: {
      required: true,
      digits: true,
      regexnim: true,
      minlength: 11,
      maxlength: 11,
  },
  jurusan: {
    required: true
  },
  angkatan: {
    required: true
  },
  username_instagram: {
    required: true,
  },
  id_line: {
    required: true,
  },
  telephone: {
    required: true,
    digits: true,
    minlength: 11,
    maxlength: 13,
  },
},
messages: {
    email_student: {
        required: 'Anda perlu mengisi email Anda.',
        email: 'Mohon masukkan alamat email yang valid.',
        emailstudent: 'Email harus menggunakan email student.'
    },
    password: {
        required: 'Anda perlu mengisi password Anda.',
        minlength: 'Isi Password Anda dengan minimal 8 character.'
    },
    nama: {
      required: 'Anda perlu mengisi nama Anda',
      regexeco: 'Nama tidak boleh mengandung angka ataupun simbol'
    },
    nim: {
        required: 'Anda perlu mengisi NIM Anda',
        digits: 'NIM harus berupa angka',
        regexnim: 'Format NIM yang Anda masukkan salah',
        minlength: 'NIM yang Anda masukkan tidak valid',
        maxlength: 'NIM yang Anda masukkan tidak valid',
    },
    jurusan: {
      required: 'Anda perlu mengisi jurusan Anda.'
    },
    angkatan: {
      required: 'Anda perlu mengisi angkatan Anda.'
    },
    username_instagram: {
      required: 'Anda perlu mengisi Username Instagram Anda.',
    },
    id_line: {
      required: 'Anda perlu mengisi ID Line Anda.',
    },
    telephone: {
      required: 'Anda perlu mengisi nomor telepon Anda',
      minlength: 'Nomor telepon terlalu pendek',
      maxlength: 'Nomor telepon terlalu panjang',
      digits: 'Nomor telepon harus berupa angka',
    },
}
});
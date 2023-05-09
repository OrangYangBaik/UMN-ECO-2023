jQuery.validator.addMethod("emailstudent", function (value, element) {
    return this.optional(element) || /^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/.test(value);
}, "Email harus menggunakan email student atau email dari UMN"
);
$( "#form-login" ).validate({
rules: {
  email_student: {
    required: true,
    emailstudent: true
  },
  password: {
    required: true,
  }
},
messages: {
    email_student: {
        required: 'Kolom Email harus diisi.',
        email: 'Mohon masukkan alamat email yang valid.',
        emailstudent: 'Kolom email harus diisi menggunakan Email Student..'
    },
    password: {
        required: 'Kolom password harus diisi.'
    }
}
});
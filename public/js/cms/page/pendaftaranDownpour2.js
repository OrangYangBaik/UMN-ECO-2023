$(document).ready(function(){
  $("#button-go-to-stamp-not-registered").click(function () {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons.fire({
        title: "Anda belum terdaftar!",
        text: "Pastikan Anda mendaftar Activity Booth terlebih dahulu.",
        confirmButtonText: "Oke",
        allowOutsideClick: false,
    });
  });

  $("#button-seminar").click(function () {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success ms-2",
            cancelButton: "btn btn-danger",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons.fire({
        title: "Daftar Seminar?",
        text: "Seminar akan berlangsung pada tanggal 1 November 2022 pukul 16.00 WIB. Pastikan ECO Citizens hadir tepat waktu, ya!",
        showCancelButton: true,
        confirmButtonText: "Daftar",
        cancelButtonText: "Kembali",
        reverseButtons: true,
        allowOutsideClick: false,
    }).then((result) => {
      if(result.isConfirmed) {
        swalWithBootstrapButtons.fire({
          title: "Anda Telah Terdaftar!",
          text: "Pastikan ECO Citizens hadir tepat waktu, ya✨ Silahkan cek email untuk informasi yang lebih lanjut!",
          confirmButtonText: "OK!",
          allowOutsideClick: false,
          }).then((result) => {
            $('#button-seminar').attr('disabled', true); 
            const seminarForm = document.querySelector(".form-seminar");
            seminarForm.submit();
          });
      }
    });
  });
  
  $("#button-activity-booth").click(function () {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success ms-2",
            cancelButton: "btn btn-danger",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons.fire({
        title: "Daftar Activities Booth?",
        text: "Activities Booth akan berlangsung pada tanggal 8-10 November 2022. Sampai jumpa, ya!",
        showCancelButton: true,
        confirmButtonText: "Daftar",
        cancelButtonText: "Kembali",
        reverseButtons: true,
        allowOutsideClick: false,
    }).then((result) => {
      if(result.isConfirmed) {
        swalWithBootstrapButtons.fire({
          title: "Anda Telah Terdaftar!",
          text: "Pastikan ECO Citizens hadir di booth, ya✨ Silahkan cek email untuk informasi yang lebih lanjut!",
          confirmButtonText: "OK!",
          allowOutsideClick: false,
          }).then((result) => {
            $('#button-activity-booth').attr('disabled', true); 
            const activityForm = document.querySelector(".form-activity");
            activityForm.submit();
          });
      }
    });
  });
});
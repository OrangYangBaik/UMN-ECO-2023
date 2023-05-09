$(document).ready(function(){
  $("#additional-activity").click(function () {
    $("#bingoModal").modal("show");
    // $(".modal-wrapper").css("display","block");
  });

  $('#form-modal').on("keyup keypress", function(e) {
    var code = e.keyCode || e.which; 
    if (code  == 13) {               
      e.preventDefault();
      return false;
    }
  });

  $("#modal-submit").click(function () {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons.fire({
        title: "Kumpulkan?",
        text: "Pastikan tautan yang kamu kumpulkan sudah benar, ya!",
        showCancelButton: true,
        confirmButtonText: "Kumpul",
        cancelButtonText: "Kembali",
        reverseButtons: true,
        allowOutsideClick: false,
    }).then((result) => {
      if (result.isConfirmed) {
        let linkBingoForm = document.querySelector("#link");
        if(linkBingoForm.value != "") {
          swalWithBootstrapButtons.fire({
              title: "TERIMA KASIH!",
              text: "Dengan mengumpulkan aktivitas ini, ECO Citizens sudah berhasil membantu Maru untuk melewati musim hujan dengan baik!",
              confirmButtonText: "YES!",
              allowOutsideClick: false,
          }).then((result) => {
            if(result.isConfirmed) {
              const droughtForm = document.querySelector(".drought-form");
              droughtForm.submit();
            }
          });
        } else {
          swalWithBootstrapButtons.fire(
              "Pastikan tautan yang Anda berikan sudah terisi dengan benar."
          );
        }
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire(
            "Pengumpulan dibatalkan",
            "Cek kembali tautan yang Anda masukkan!"
        );
      }
    });
  });
});
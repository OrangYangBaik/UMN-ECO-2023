const bingoItem = $(".bingo-flex-item");
const modalSubmit = $("#modal-submit");
const description = $(".bingo-description");
const button = $(".swal-button");
const bingoDone = $(".bingo-done");
const bingoDoneList = [];
const urlGifTanaman = document.querySelector(".gif-tanaman").textContent;
const bingoDoneListArray = [
  [0,1,2],
  [3,4,5],
  [6,7,8],
  [0,3,6],
  [1,4,7],
  [2,5,8],
  [0,4,8],
  [2,4,6]
];

$(document).ready(function () {
  //ambil data bingo yang udah diselesaiin dari si user yang lagi login
  [...bingoDone].forEach(function(item) {
    bingoDoneList.push(item.textContent);
  });

  //cek setiap biji nya, kalo ada yang cocok, ganti jadi GIF
  bingoDoneListArray.forEach(function(eachItem) {
    if(bingoDoneList[eachItem[0]] == 1 && bingoDoneList[eachItem[1]] == 1 && bingoDoneList[eachItem[2]] == 1) {
      bingoItem[eachItem[0]].querySelector(".biji-bingo").src = `${urlGifTanaman}`;
      bingoItem[eachItem[1]].querySelector(".biji-bingo").src = `${urlGifTanaman}`;
      bingoItem[eachItem[2]].querySelector(".biji-bingo").src = `${urlGifTanaman}`;
    }
  });


  //cek udah ada bingo yang diselesaiin ? kalo udah ganti jadi biji
  $([...bingoItem]).each(function() {
    let done = this.querySelector(".bingo-done").textContent;
    if(done == 1) {
      let title = this.children[0];
      let bijiBingoContainer = this.children[this.children.length-1];
      title.classList.add("d-none")
      bijiBingoContainer.classList.add("show");
    }
  });

  let textSubmit = "test";

  //Setiap bingo di klik tampilin modal
  $(bingoItem).click(function (item) {
      item = item.target;
      const id = item.getAttribute("data-id") - 1;
      let bingoNumberForm = document.querySelector("#bingo-number");

      bingoNumberForm.value = id+1;

      if(description[id] != undefined || description[id] != null) {
        $("#bingoModal").modal("show");
        $("#bingoModal .modal-title").text(item.textContent);
        $("#bingoModal .modal-body").html(description[id].textContent);
      } else {
        $("#bingoModalDone").modal("show");
      }

      switch(id){
        case 0:
          textSubmit = "Dengan menyelesaikan tantangan ini, ECO Players telah membantu tanaman tetap sehat di musim kemarau!";
          break;
        case 1:
          textSubmit = "Dengan menyelesaikan tantangan ini, ECO Players sudah berhasil membantu Maru untuk menghemat air di musim kemarau!";
          break;
        case 2:
          textSubmit = "Dengan menyelesaikan tantangan ini, ECO Players berhasil menghemat air dan memberikan cadangan air bagi para tanaman di musim kemarau ini.";
          break;
        case 3:
          textSubmit = "Dengan menyelesaikan tantangan ini, ECO Players berhasil memberikan ide baru di benak orang lain dalam ikut menghemat air di masa pandemi!";
          break;
        case 4:
          textSubmit = "Dengan menyelesaikan tantangan ini,  ECO Players telah mengupayakan untuk membuat udara jadi lebih bersih dari polusi di musim kemarau! Dirawat ya temannya Maru!";
          break;
        case 5:
          textSubmit = "Dengan menyelesaikan tantangan ini, ECO Players telah membantu Maru memotivasi orang lain untuk mencegah kekeringan!";
          break;
        case 6:
          textSubmit = "Dengan menyelesaikan tantangan ini, ECO Players membuat tanaman menjadi lebih sehat dan segar karena mendapat nutrisi!";
          break;
        case 7:
          textSubmit = "Dengan menyelesaikan tantangan ini, ECO Players telah membantu Maru menyebarkan awareness mengenai pentingnya kekeringan!";
          break;
        case 8:
          textSubmit = "Dengan menyelesaikan tantangan ini, ECO Players telah membantu Maru membagikan cara hemat air di kegiatan mencuci yang menarik perhatian orang lain!";
          break;
      }
  });

  modalSubmit.click(function () {
      const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
              confirmButton: "btn btn-success",
              cancelButton: "btn btn-danger",
          },
          buttonsStyling: false,
      });

  swalWithBootstrapButtons.fire({
          title: "Kamu Yakin ?",
          text: "Pastikan tautan yang kamu kumpulkan adalah tautan yang benar.",
          showCancelButton: true,
          confirmButtonText: "Kumpul",
          cancelButtonText: "Kembali",
          reverseButtons: true,
      }).then((result) => {
        if (result.isConfirmed) {
          let linkBingoForm = document.querySelector("#link");
          if(linkBingoForm.value != "") {
            swalWithBootstrapButtons.fire({
                title: "TERIMA KASIH",
                text: textSubmit,
                confirmButtonText: "YES!",
            }).then((result) => {
              if (result.isConfirmed) {
                if(result.isConfirmed) {
                  const droughtForm = document.querySelector(".drought-form");
                  droughtForm.submit();
                }
              }
            });
          } else {
            swalWithBootstrapButtons.fire(
                "Pastikan link yang anda berikan sudah terisi dan benar.",
                "(Gunakan link dengan www.instagram.com/.....)"
            );
          }
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          swalWithBootstrapButtons.fire(
              "Pengumpulan dibatalkan",
              "Anda bisa mengecek lagi link yang Anda kumpulkan."
          );
        }
      });
    });
});

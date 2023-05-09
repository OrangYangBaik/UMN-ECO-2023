const bingoDoneSubmit = $(".bingo-done");
    const bingoDoneListSubmit = [];
    const bingoDoneListArraySubmit = [
      [0,1,2],
      [3,4,5],
      [6,7,8],
      [0,3,6],
      [1,4,7],
      [2,5,8],
      [0,4,8],
      [2,4,6]
    ];
    $(document).ready(function(){

      [...bingoDoneSubmit].forEach(function(item) {
        bingoDoneListSubmit.push(item.textContent);
      });
  
      bingoDoneListArraySubmit.forEach(function(eachItem) {
        if(bingoDoneListSubmit[eachItem[0]] == 1 && bingoDoneListSubmit[eachItem[1]] == 1 && bingoDoneListSubmit[eachItem[2]] == 1) {
          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
          });
            swalWithBootstrapButtons.fire({
              title: "SELAMAT, ECO PLAYERS!",
              text: "Kamu telah berhasil mendapatkan satu BINGO.",
              confirmButtonText: "OK!",
          });
        }
      });
    });
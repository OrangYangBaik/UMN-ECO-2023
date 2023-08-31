<!DOCTYPE html>
<html>
  <head>
    <title>QR scanner untuk dapat kupon</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <h1>QR Scanner</h1>
    <div id="reader" width="600px"></div>
    
    <script>
      function makeAjaxRequest(url, data) {
        return new Promise((resolve, reject) => {
          $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

          $.ajax({
            url: url,
            method: 'POST',
            data: data,
            success: resolve,
            error: reject
          });
        });
      }

      const scanner = new Html5QrcodeScanner('reader', {
        qrbox: {
            width: 250,
            height: 250,
        },
        fps: 20,
      });

      scanner.render(success, error);

      let ajaxSent = false; 

      function success(result) {
        if (!ajaxSent) { 
            ajaxSent = true;
            async function performNestedAjaxCalls() {
              try {
                //kirim ajax call pertama buat cek bener ga qrcodenya
                const response1 = await makeAjaxRequest('/verificationAdmin/sendReqDapatKupon', {
                  qrcode: result,
                });
                //kalo qrcodenya bener bakal dikirim data user yang ngescan ke AdminController@sendToAdminPage buat dicek validasi lagi
                if (response1.success) {
                  alert(response1.message);
                  // ini dikirimnya
                  const response2 = await makeAjaxRequest('/sendDataDapatKuponToAdmin', {
                    nama : response1.nama,
                    nim : response1.nim
                  });
                  if (response2.success){
                    scanner.clear();
                    document.getElementById('reader').remove();
                    alert(response2.message);
                    //ini routenya (buat redirect) kalo dia udh ngescan dan bener datanya 
                    window.location.href = "{{ route('homepage') }}";
                  }else {
                    alert(response1.message);
                  }
                } else {
                  alert(response1.message);
                }
              } catch (error) {
                console.error('An error occurred:', error);
              }
            }
            performNestedAjaxCalls();
        }
      }

      function error(err) {
        console.error(err);
      }
    </script>
  </body>
</html>

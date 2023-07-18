<!DOCTYPE html>
<html>
  <head>
    <title>HTML QR Scanner</title>
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
            // Asynchronous function to perform two nested AJAX calls
            async function performNestedAjaxCalls() {
              try {
                // First AJAX request
                const response1 = await makeAjaxRequest('/verificationAdmin/sendReq', {
                  qrcode: result,
                });

                if (response1.success) {
                  alert(response1.message);
                  const response2 = await makeAjaxRequest('/sendDataToAdmin', {
                    nama : response1.nama,
                    nim : response1.nim
                  });
                  if (response2.success){
                    scanner.clear();
                    document.getElementById('reader').remove();
                    alert(response2.message);
                    window.location.href = "{{ route('landing') }}";
                  }
                } else {
                  alert(response1.message);
                }
              } catch (error) {
                // Handle errors from either AJAX call
                console.error('An error occurred:', error);
              }
            }

            // Call the performNestedAjaxCalls function to initiate the nested AJAX calls
            performNestedAjaxCalls();
        }
      }

      function error(err) {
        console.error(err);
      }
    </script>
  </body>
</html>

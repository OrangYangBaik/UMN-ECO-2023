@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/scannerQRBooth.css') }}">
@endsection

@section('content')
    <div class="scanner-qr-booth-game-container">
        <h1 class="mb-2 text-center">QR Scanner</h1>
        <div id="reader"></div>
    </div>
@endsection

@section('custom-js')
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
                        const response1 = await makeAjaxRequest('/verificationAdmin/sendReqMain', {
                            qrcode: result,
                        });
                        //kalo qrcodenya bener bakal dikirim data user yang ngescan ke AdminController@sendToAdminPage buat dicek validasi lagi
                        if (response1.success) {
                            alert(response1.message);
                            // ini dikirimnya
                            const response2 = await makeAjaxRequest('/sendDataMainToAdmin', {
                                nama: response1.nama,
                                nim: response1.nim
                            });
                            if (response2.success) {
                                scanner.clear();
                                document.getElementById('reader').remove();
                                alert(response2.message);
                                //ini routenya (buat redirect) kalo dia udh ngescan dan bener datanya 
                                window.location.href = "{{ route('homepage') }}";
                            } else {
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
@endsection

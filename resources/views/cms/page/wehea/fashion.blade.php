@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/fashion.css') }}">
@endsection

@section('content')
<div class="fashion-outer">
    <div class="container-fashion">
        <div class="manekin1">
            <img src="{{ asset('images/wehea/fashion/Fashion/Manekin.svg') }}">
        </div>
        <div class="manekin2">
            <img src="{{ asset('images/wehea/fashion/Fashion/Manekin.svg') }}">
        </div>
        <div class="manekin3">
            <img src="{{ asset('images/wehea/fashion/Fashion/Manekin.svg') }}">
        </div>
        <div class="cermin">
            <img src="{{ asset('images/wehea/fashion/Fashion/cermin.svg') }}">
        </div>
        <div class="lukisan">
            <img src="{{ asset('images/wehea/fashion/Fashion/Lukisan 1.svg') }}">
        </div>
        <div class="nala">
            <img src="{{ asset('images/wehea/fashion/Fashion/nala peta.svg') }}">
        </div>
        <div class="rakBaju">
            <img src="{{ asset('images/wehea/fashion/Fashion/Rak Baju.svg') }}">
        </div>
        <div class="baju">
            <img src="{{ asset('images/wehea/fashion/Fashion/Baju.svg') }}">
        </div>
        <div class="celana">
            <img src="{{ asset('images/wehea/fashion/Fashion/Celana.svg') }}">
        </div>
        <div class="dress">
            <img src="{{ asset('images/wehea/fashion/Fashion/Dress.svg') }}">
        </div>
            <button id="openPopup">
                <img src="{{ asset('images/wehea/balaiKota/Tooltip.svg') }}">
            </button>
                <div class="popup" id="popup">
                    <div class="popup-content">
                        <span id="closePopup" class="close">&times;</span>
                        <h2 style="color: #ED927B; font-style: bobbyjones; text-align: justify;">Selamat Datang</h2>
                        <p style="color: #004963; font-style: bobbyjones; text-align: justify;">
                        Penduduk Wehea punya tren fashion yang unik lho!!
                        Memakai baju yang baru di Wehea itu dianggap haram dan tidak trendy kalo di Wehea. 
                        Warga wehea juga memperhatikan kelestarian lingkungan dari pakaian yang mereka gunakan. 
                        Mereka biasa saling bertukar pakaian, dan mengumpulkan pakaian mereka untuk didonasikan atau diolah kembali menjadi pakaian baru.
                        Keren uga gak sih tren fashion di Hidden City in Wehea? ECO Friends mau dong ikutan!!
                        ECO Friends tau gak? Sumber sampah terbesar ke-2 yang paling numpuk itu berasal dari baju yang kita pakai!!
                        92 juta Ton sampah tekstil diproduksi setiap tahunnya. Sampah ini bertambah terus setiap tahun karena budaya fast fashion. 
                        ECO Friends pernah malu gak kalo ketemu orang dan ketahuan pakai baju yang sama kek terakhir ketemu sama dia? Kalo iya berarti ECO Friends udah kena kebiasaan fast fashion! Baju kita cuma punya siklus hidup yang pendek dan biasa cuma dipakai 1-2 kali. Padahal bajunya masih bagus dan bisa dipakai lagi
                        Daripada jadi sampah, ECO Friends bisa mendonasikan baju ECO Friends di Hidden City in Wehea lho…
                        Donasi dibuka pada 18-29 September 2023 
                        Di Lobby D, Universitas Multimedia Nusantara. 
                        Mau tau lebih lanjut, boleh banget cek manual Ebook Kita!

                        </p>
                            <img id="tokoBaju2D" src="{{asset('images/wehea/fashion/2D/toko baju.svg') }}" alt="tokoBajuPopup" style="width: 50px;">
                    </div>
                </div>
                <script src="{{asset('js/cms/page/wehea/fashion.js') }}"></script> 
    </div>
</div>
@endsection

@section('custom-js')
@endsection

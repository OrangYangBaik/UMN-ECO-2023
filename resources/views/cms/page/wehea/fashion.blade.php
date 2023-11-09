@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/fashion.css') }}">
@endsection

@section('content')
    @include('cms.page.wehea.floatingIcons')
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
                <img src="{{ asset('images/wehea/fashion/Fashion/Cermin.svg') }}">
            </div>
            <div class="lukisan">
                <img src="{{ asset('images/wehea/fashion/Fashion/Lukisan 1.svg') }}">
            </div>
            <div class="nala">
                <img src="{{ asset('images/wehea/fashion/Fashion/Nala Peta.svg') }}">
            </div>
            <div class="rakBaju">
                <img src="{{ asset('images/wehea/fashion/Fashion/Rak baju.svg') }}">
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
            <div id="openPopup">
                <img src="{{ asset('images/wehea/balaiKota/Tooltip.svg') }}">
            </div>
            <div class="popup" id="popup">
                <div class="popup-content">
                    <p
                        style="color: #ED927B; font-family: bobbyjones; font-size: 2rem; text-align: center; margin: 20px 0;">
                        Selamat Datang
                    </p>
                    <p style="color: #1f576f; text-align: justify;">
                        <b>Penduduk Wehea punya tren fashion yang unik lho!!</b>
                        <br />
                        Memakai baju yang baru di Wehea itu dianggap haram dan tidak trendy kalo di Wehea.
                        Warga wehea juga memperhatikan kelestarian lingkungan dari pakaian yang mereka gunakan.
                        Mereka biasa saling bertukar pakaian, dan mengumpulkan pakaian mereka untuk didonasikan atau diolah
                        kembali menjadi pakaian baru.
                        Keren uga gak sih tren fashion di Hidden City in Wehea? ECO Friends mau dong ikutan!!
                        <br />
                        <b>
                            ECO Friends tau gak? Sumber sampah terbesar ke-2 yang paling numpuk itu berasal dari baju yang
                            kita
                            pakai!!
                        </b>
                        <br />
                        92 juta Ton sampah tekstil diproduksi setiap tahunnya. Sampah ini bertambah terus setiap tahun
                        karena budaya fast fashion.
                        ECO Friends pernah malu gak kalo ketemu orang dan ketahuan pakai baju yang sama kek terakhir ketemu
                        sama dia? Kalo iya berarti ECO Friends udah kena kebiasaan fast fashion! Baju kita cuma punya siklus
                        hidup yang pendek dan biasa cuma dipakai 1-2 kali. Padahal bajunya masih bagus dan bisa dipakai lagi
                        Daripada jadi sampah, ECO Friends bisa mendonasikan baju ECO Friends di Hidden City in Wehea lho…
                        <br />
                        <b>
                            Donasi dibuka pada 18-29 September 2023
                            <br />
                            Di Lobby D, Universitas Multimedia Nusantara.
                        </b>
                    </p>
                    <div class="token-nala-popup-fashion">
                        <img src="{{ asset('images/wehea/fashion/Fashion/token nala.png') }}" alt="Token Nala" />
                    </div>
                    <div class="ghui-popup-fashion">
                        <img src="{{ asset('images/wehea/fashion/2D/Ghui.png') }}" alt="Ghui" />
                    </div>
                    <div class="ttyh-popup-fashion">
                        <img src="{{ asset('images/wehea/fashion/2D/Ttyh.png') }}" alt="Ttyh" />
                    </div>
                    <div class="tyui-popup-fashion">
                        <img src="{{ asset('images/wehea/fashion/2D/Tyui.png') }}" alt="Tyui" />
                    </div>
                </div>
                <a id="tooltip-fashion-close" href="#">
                    <div class="button-kembali">
                        <button>KEMBALI</button>
                    </div>
                </a>
            </div>
            <script src="{{ asset('js/cms/page/wehea/fashion.js') }}"></script>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection

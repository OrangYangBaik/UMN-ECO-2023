@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/balaiKota.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/floatingIcons.css') }}">
@endsection

@section('content')
    {{-- <div class="d-flex align-items-center flex-column container" style="padding: 100px 0 50px 0;">

        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/wehea/info" class="text-decoration-none text-white">View my info</a>
            </button>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageMain" class="text-decoration-none text-white">Scan QR Code Arcade</a>
            </button>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageDapatKupon" class="text-decoration-none text-white">Scan QR Code Get Kupon</a>
            </button>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageKurangKupon" class="text-decoration-none text-white">Scan QR Code Tukar Kupon</a>
            </button>

        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageDapatCredit" class="text-decoration-none text-white">Scan QR Code Side Quest</a>
            </button>

        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageMerchandise" class="text-decoration-none text-white">Scan QR Code Merchandise</a>
            </button>
        </div>
        @if ($isJoin == 0)
            <form action="/wehea/register" method="post">
                @csrf
                <button type="submit" class="btn btn-primary" style="width: 300px;">Join Wehea</button>
            </form>
        @endif
    </div> --}}
    @include('cms.page.wehea.floatingIcons')
    <div id="balai-kota-outer">
        <div id="balai-kota-container">
            <div class="wehea-pict wehea-air-mancur">
                <img src="{{ asset('images/wehea/balaiKota/Air mancur.svg') }}" alt="Air Mancur" />
            </div>
            <div class="wehea-pict wehea-balai-kota">
                <img src="{{ asset('images/wehea/balaiKota/Balai kota.svg') }}" alt="Balai Kota" />
            </div>
            <div class="wehea-pict wehea-bangku-1">
                <img src="{{ asset('images/wehea/balaiKota/Bangku.svg') }}" alt="Bangku 1" />
            </div>
            <div class="wehea-pict wehea-bangku-2">
                <img src="{{ asset('images/wehea/balaiKota/Bangku.svg') }}" alt="Bangku 2" />
            </div>
            <div id="wehea-burung" class="wehea-pict wehea-burung">
                <img src="{{ asset('images/wehea/balaiKota/Burung.svg') }}" alt="Burung" />
            </div>
            <div id="wehea-kucing" class="wehea-pict wehea-kucing">
                <img src="{{ asset('images/wehea/balaiKota/Kucing.svg') }}" alt="Kucing" />
            </div>
            <div id="wehea-kukang" class="wehea-pict wehea-kukang">
                <img src="{{ asset('images/wehea/balaiKota/Kukang.svg') }}" alt="Kukang" />
            </div>
            <div class="wehea-pict wehea-lampu">
                <img src="{{ asset('images/wehea/balaiKota/Lampu.svg') }}" alt="Lampu" />
            </div>
            <div class="wehea-pict wehea-nala-balai-kota">
                <img src="{{ asset('images/wehea/balaiKota/Nala balai kota.svg') }}" alt="Nala Balai Kota" />
            </div>
            <div class="wehea-pict wehea-papan-pengumuman">
                <img src="{{ asset('images/wehea/balaiKota/Papan pengumuman.svg') }}" alt="Papan Pengumuman" />
            </div>
            <div class="wehea-pict wehea-tong-sampah">
                <img src="{{ asset('images/wehea/balaiKota/Tong sampah_.svg') }}" alt="Tong Sampah" />
            </div>

            <div id="tooltip-burung" class="wehea-pict wehea-tooltip wehea-tooltip-burung">
                <img src="{{ asset('images/wehea/balaiKota/Tooltip.svg') }}" alt="Tooltip Burung" />
            </div>
            <div id="tooltip-kucing" class="wehea-pict wehea-tooltip wehea-tooltip-kucing">
                <img src="{{ asset('images/wehea/balaiKota/Tooltip.svg') }}" alt="Tooltip Kucing" />
            </div>
            <div id="tooltip-kukang" class="wehea-pict wehea-tooltip wehea-tooltip-kukang">
                <img src="{{ asset('images/wehea/balaiKota/Tooltip 2.svg') }}" alt="Tooltip Kukang" />
            </div>

            <div class="chat-box-balai-kota-container chat-box-burung">
                <div class="chat-box-balai-kota">
                    <div class="triangle-burung"></div>
                    <div>Bantu aku menjadi reporter di Hidden City in Wehea!</div>
                </div>
            </div>

            <div class="chat-box-balai-kota-container chat-box-kucing">
                <div class="chat-box-balai-kota">
                    <div class="triangle-kucing"></div>
                    <div>Bantu aku memberikan hadiah kepada si dia!</div>
                </div>
            </div>

            <div class="chat-box-balai-kota-container chat-box-kukang">
                <div class="chat-box-balai-kota">
                    <div class="triangle-kukang"></div>
                    <div>Bantu aku memilah sampah untuk menyelamatkan dunia!</div>
                </div>
            </div>


            <div class="balai-kota-air-mancur-overlay">
                <img src="{{ asset('images/wehea/balaiKota/token nala.svg') }}" alt="Token Nala" />
                <div class="chat-box-balai-kota-container chat-box-air-mancur" style="display: block;">
                    <div class="chat-box-balai-kota">
                        <div class="triangle-air-mancur"></div>
                        <div> Rangkaian Main Event pertama dari UMN ECO 2023 adalah Hidden City in Wehea. Hidden City in
                            Wehea adalah
                            kota tersembunyi yang ada di tengah hutan lindung Wehea. Penduduk kota Wehea menerapkan pola
                            hidup yang
                            berkelanjutan dan kebetulan sedang mengadakan festival! Ayo ikuti Perjalanan menelusuri rahasia
                            Hidden
                            City in Wehea.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/wehea/balaiKota.js') }}"></script>
    <script src="{{ asset('js/cms/page/wehea/floatingIcons.js') }}"></script>
@endsection

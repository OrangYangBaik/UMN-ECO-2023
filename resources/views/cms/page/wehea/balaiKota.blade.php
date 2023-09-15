@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/balaiKota.css') }}">
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

    <div id="balai-kota-container">
        <div class="wehea-pict wehea-air-mancur">
            <img src="{{ asset('images/wehea/balaiKota/Air mancur.svg') }}" alt="Air Mancur" />
        </div>
        <div class="wehea-pict wehea-balai-kota">
            <img src="{{ asset('images/wehea/balaiKota/Balai kota.svg') }}" alt="Balai Kota" />
        </div>
        <div class="wehea-pict wehea-bangku">
            <img src="{{ asset('images/wehea/balaiKota/Bangku.svg') }}" alt="Bangku" />
        </div>
        <div class="wehea-pict wehea-burung">
            <img src="{{ asset('images/wehea/balaiKota/Burung.svg') }}" alt="Burung" />
        </div>
        <div class="wehea-pict wehea-kucing">
            <img src="{{ asset('images/wehea/balaiKota/Kucing.svg') }}" alt="Kucing" />
        </div>
        <div class="wehea-pict wehea-kukang">
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
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/homePage.js') }}"></script>
@endsection

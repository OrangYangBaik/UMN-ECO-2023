@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/pasar.css') }}">
@endsection

@section('content')
    @include('cms.page.wehea.floatingIcons')
    <div class="pasar-outer">
        <div class="container-pasar">
            <div class="labu-pasar">
                <img src="{{ asset('images/wehea/Pasar/Labu.svg') }}" />
            </div>
            <div class="mangga-pasar">
                <img src="{{ asset('images/wehea/Pasar/Mangga.svg') }}" />
            </div>
            <div class="pasar-buah-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah.svg') }}" />
            </div>
            <div class="labu2-pasar">
                <img src="{{ asset('images/wehea/Pasar/Labu.svg') }}" />
            </div>
            <div class="tenda-merah-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah2.svg') }}" />
            </div>
            <div class="terong-pasar">
                <img src="{{ asset('images/wehea/Pasar/Terong.svg') }}" />
            </div>
            <div class="apel-pasar">
                <img src="{{ asset('images/wehea/Pasar/Apel.svg') }}" />
            </div>
            <div class="apelIjo-pasar">
                <img src="{{ asset('images/wehea/Pasar/Apel ijo.svg') }}" />
            </div>
            <div class="pasar-buah-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah.svg') }}" />
            </div>

            <div class="mangga-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/Mangga.svg') }}" />
            </div>
            <div class="pasar-buah-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah.svg') }}" />
            </div>
            <div class="tenda-merah-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah2.svg') }}" />
            </div>
            <div class="apel-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/Apel.svg') }}" />
            </div>
            <div class="apelIjo-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/Apel ijo.svg') }}" />
            </div>
            <div class="daging-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/Daging.svg') }}" />
            </div>
            <div class="merch1">
                <img src="{{ asset('images/wehea/Pasar/Merch.svg') }}" />
            </div>
            <div class="merch2">
                <img src="{{ asset('images/wehea/Pasar/Merch.svg') }}" />
            </div>
            <div class="nala">
                <img src="{{ asset('images/wehea/Pasar/Nala balai kota.svg') }}" />
            </div>
            <div class="market1">
                <img src="{{ asset('images/wehea/Pasar/Market .svg') }}" />
            </div>
            <div class="market2">
                <img src="{{ asset('images/wehea/Pasar/Market .svg') }}" />
            </div>
            <div class="arto">
                <img src="{{ asset('images/wehea/Pasar/Arto.svg') }}" />
            </div>

            <div id="tooltip-ecostore" class="tooltip-ecostore">
                <img src="{{ asset('images/wehea/balaiKota/Tooltip.svg') }}" alt="Tooltip Papan Tulis" />
            </div>

            <div class="tooltip-ecostore-chatbox-overlay">
                <div id="tooltip-ecostore-chatbox" class="tooltip-ecostore-chatbox">
                    <h2 style="color: #ED927B; text-align: center;">ECO Store</h2>
                    <p style="text-align: justify;">
                        ECO Store, seperti gambaran pada namanya, merupakan toko yang menjual berbagai produk eco-friendly
                        dengan intensi untuk memberikan kontribusi kembali dalam menghidupkan bumi dan alam semesta. ECO
                        Store juga dikelola langsung oleh Tim ARTO dari UMN ECO 2021 lho!
                    </p>
                    <p style="text-align: justify;">
                        <b>UMN ECO x WWF ID</b>
                        <br />
                        Dalam rangka bekerja sama dengan WWF ID, UMN ECO 2023 akan mengadakan bundling merchandise WWF x UMN
                        ECO. WWF adalah Eco-friendly store yang sudah dikenal oleh mancanegara loh, ECO Friends! Keren
                        banget ga sih🤩 Fun factnya lagi, WWF first time collab sama kampus loh!
                    </p>
                    <p style="text-align: justify;">
                        <b>Spot us on</b>
                        <br />
                        Instagram: <a href="https://www.instagram.com/ecostore_umn/" target="_blank">@ecostore_umn</a>
                    </p>
                </div>
                <a id="tooltip-ecostore-close" class="close" href="#">
                    <div class="button-kembali">
                        <button>KEMBALI</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/wehea/pasar.js') }}"></script>
@endsection

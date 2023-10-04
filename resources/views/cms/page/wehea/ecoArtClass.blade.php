@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/ecoArtClass.css') }}">
@endsection

@section('content')
    @include('cms.page.wehea.floatingIcons')
    <div class="outer-container-eco-art-class">
        <div class="container-eco-art-class">
            <div class="eco-art-class-exit">
                <img src="{{ asset('images/wehea/gedungkesenian/Eco art class.svg') }}" />
            </div>
            <div class="eco-art-class-nala">
                <img src="{{ asset('images/wehea/gedungkesenian/Nala balai kota.svg') }}" />
            </div>
            <div class="eco-art-class-patung">
                <img src="{{ asset('images/wehea/gedungkesenian/Patung.svg') }}" />
            </div>
            <div class="eco-art-class-papan-tulis">
                <img src="{{ asset('images/wehea/gedungkesenian/2d/SVG/Papan tulis.svg') }}" />
            </div>
            <div id="papan-tulis-chatbox" class="papan-tulis-chatbox">
                <h2 style="text-align: center;">Reverse TRAsh is ART!</h2>
                <p style="text-align: justify;">
                    Untuk menjaga alam, semua alat dan perkakas di Hidden City in Wehea barang bekas diubah menjadi
                    peralatan
                    baru yang bisa dipakai kembali.
                    Pengen juga gak sih punya barang-barang hasil kreasi sendiri! Yuk datang ke Hidden City in Wehea
                </p>
            </div>
            <div id="tooltip-exit" class="tooltip-exit">
                <img src="{{ asset('images/wehea/balaiKota/Tooltip.svg') }}" alt="Tooltip Exit" />
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/wehea/ecoArtClass.js') }}"></script>
@endsection

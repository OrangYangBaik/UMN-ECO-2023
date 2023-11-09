@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/gedungKesenian.css') }}">
@endsection

@section('content')
    @include('cms.page.wehea.floatingIcons')
    <div class="outer-container-gedung-kesenian">
        <div class="container-gedung-kesenian">
            <img class="background-gedung-kesenian" src="{{ asset('images/wehea/gedungkesenian/background.png') }}" />
            <div class="eco-art-class-gedung-kesenian">
                <img src="{{ asset('images/wehea/gedungkesenian/Eco art class.svg') }}" />
            </div>
            <div class="keramik-gedung-kesenian">
                <img src="{{ asset('images/wehea/gedungkesenian/Keramik.svg') }}" />
            </div>
            <div class="lukisan-1-gedung-kesenian">
                <img src="{{ asset('images/wehea/gedungkesenian/Lukisan 1.svg') }}" />
            </div>
            <div class="lukisan-2-gedung-kesenian">
                <img src="{{ asset('images/wehea/gedungkesenian/Lukisan 2.svg') }}" />
            </div>
            <div class="lukisan-3-gedung-kesenian">
                <img src="{{ asset('images/wehea/gedungkesenian/Lukisan 3.svg') }}" />
            </div>
            {{-- <div class="papan-tulis-gedung-kesenian">
                <img src="{{ asset('images/wehea/gedungkesenian/Papan tulis.svg') }}" />
            </div> --}}
            <div class="patung-gedung-kesenian">
                <img src="{{ asset('images/wehea/gedungkesenian/Patung.svg') }}" />
            </div>
            <img class="rak-kerajinan-gedung-kesenian"
                src="{{ asset('images/wehea/gedungkesenian/rak kerajinan vas.png') }}" />
            {{-- <div class="rak-gedung-kesenian">
                <img src="{{ asset('images/wehea/gedungkesenian/Rak.svg') }}" />
            </div> --}}
            <img class="nala-gedung-kesenian" src="{{ asset('images/wehea/gedungkesenian/Nala balai kota.svg') }}"
                alt="">

            <div id="tooltip-papan-tulis" class="tooltip-papan-tulis">
                <img src="{{ asset('images/wehea/balaiKota/Tooltip.svg') }}" alt="Tooltip Papan Tulis" />
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/wehea/gedungKesenian.js') }}"></script>
@endsection

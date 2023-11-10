@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/preEvent/jnanaSanka.css') }}">
@endsection

@section('content')
    <div id="homepage-container">
        <audio id="hover-sound">
            <source src="{{ asset('sound/lembarankertas-cut.mp3') }}" type="audio/mpeg">
        </audio>
        @include('cms.page.preEvent.jnanaSanka')
        <div class="maskot-nala">
            <img id="maskot-nala" src="{{ asset('images/treasureMap/nala-maskot.svg') }}" alt="Maskot Nala" />
        </div>
        <div class="garis-putus">
            <img class="hoverable-obj" id="garis-putus-1" src="{{ asset('images/treasureMap/garis-putus.svg') }}"
                alt="Garis Putus" />
        </div>
        <div class="garis-putus">
            <img class="hoverable-obj" id="garis-putus-2" src="{{ asset('images/treasureMap/garis-putus-mobile.svg') }}"
                alt="Garis Putus" />
        </div>
        <div class="jnana-sanka">
            <img class="hoverable-obj hoverable-obj-done" src="{{ asset('images/treasureMap/jnana-sanka.svg') }}"
                alt="Jnana Sanka" />
        </div>
        <div class="nawasena">
            <img class="hoverable-obj hoverable-obj-done" src="{{ asset('images/treasureMap/nawasena.svg') }}"
                alt="Nawasena" />
        </div>
        <div class="wehea">
            <img class="hoverable-obj hoverable-obj-done" src="{{ asset('images/treasureMap/wehea.svg') }}"
                alt="Hidden City in Wehea" />
        </div>
        <div class="eco-patra">
            <img class="hoverable-obj hoverable-obj-done" src="{{ asset('images/treasureMap/eco-patra.svg') }}"
                alt="Eco Patra" />
        </div>
        <div class="meru-betiri">
            <img class="hoverable-obj" src="{{ asset('images/treasureMap/meru-betiri.svg') }}" alt="Gate of Meru Betiri" />
        </div>

        <!-- Overlay Container -->
        <div class="overlay-container">
            <div class="overlay-content">
                <img id="overlay-image" />
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/homePage.js') }}"></script>
@endsection

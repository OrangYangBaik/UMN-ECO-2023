@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/preEvent/jnanaSanka.css') }}">
@endsection

@section('content')
    <div id="homepage-container">
        <audio id="hover-sound" src="{{ asset('sound/lembarankertas.mp3') }}"></audio>
        @include('cms.page.preEvent.jnanaSanka')
        <div class="hoverable-obj garis-putus">
            <img id="garis-putus-1" src="{{ asset('images/treasureMap/garis-putus.png') }}" alt="Garis Putus" />
        </div>
        <div class="hoverable-obj jnana-sanka">
            <img src="{{ asset('images/treasureMap/jnana-sanka.png') }}" alt="Jnana Sanka" />
        </div>
        <div class="hoverable-obj nawasena">
            <img src="{{ asset('images/treasureMap/nawasena.png') }}" alt="Nawasena" />
        </div>
        <div class="hoverable-obj wehea">
            <img src="{{ asset('images/treasureMap/wehea.png') }}" alt="Hidden City in Wehea" />
        </div>
        <div class="hoverable-obj eco-patra">
            <img src="{{ asset('images/treasureMap/eco-patra.png') }}" alt="Eco Patra" />
        </div>
        <div class="hoverable-obj meru-betiri">
            <img src="{{ asset('images/treasureMap/meru-betiri.png') }}" alt="Gate of Meru Betiri" />
        </div>
        {{-- <a href="{{ route('scannerPage') }}">tesqr</a> --}}
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/homePage.js') }}"></script>
@endsection

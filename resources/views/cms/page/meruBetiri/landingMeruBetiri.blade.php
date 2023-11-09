@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/meruBetiri/landingMeruBetiri.css') }}">
@endsection

@section('content')
    <div class="landing-meru-betiri-container">
        <div class="pulauSatu">
            <img class="meru-betiri-hoverable" src="{{ asset('images/meruBetiri/Copy of Pulau 1.png') }}" alt="Pulau Satu" />
        </div>
        <div class="pulauDua">
            {{-- <img class="meru-betiri-hoverable" src="{{ asset('images/meruBetiri/Pulau 2.png') }}" alt="Pulau Dua" /> --}}
            <img class="meru-betiri-not-allowed" src="{{ asset('images/meruBetiri/Pulau 2.png') }}" alt="Pulau Dua" />
        </div>
        <div class="pulauTiga">
            {{-- <img class="meru-betiri-hoverable" src="{{ asset('images/meruBetiri/Pulau 3.png') }}" alt="Pulau Tiga" /> --}}
            <img class="meru-betiri-not-allowed" src="{{ asset('images/meruBetiri/Pulau 3.png') }}" alt="Pulau Tiga" />
        </div>
        <div class="nala-lari">
            <img class="meru-betiri-hoverable" src="{{ asset('images/meruBetiri/Copy of Nala lari.png') }}"
                alt="Nala Lari" />
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/meruBetiri/landingMeruBetiri.js') }}"></script>
@endsection

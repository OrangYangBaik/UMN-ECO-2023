@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/meruBetiri/pulauDua.css') }}"> 
@endsection

@section('content')
    <div class="outer-container-pulauDua">
        <div class="container-pulauDua">
            <div class="background-pulauDua"></div>
            <div class="pulauDua-img">
                <img src="{{ asset('images/meruBetiri/Pulau 2.png') }}" alt="Pulau-2">
            </div>
            <div class="map-img">
                <img src="{{ asset('images/meruBetiri/Denah GOMBArtboard 1 1.png') }}" alt="Denah Funwalk">
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <!-- <script src="{{ asset('') }}"></script> -->
@endsection

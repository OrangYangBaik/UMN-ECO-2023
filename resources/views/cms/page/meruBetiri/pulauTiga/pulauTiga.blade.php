@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/meruBetiri/pulauTiga.css') }}"> 
@endsection

@section('content')
    <div class="outer-container-pulauTiga">
        <div class="container-pulauTiga">
            <div class="background-pulauTiga"></div>
            <div class="pulauTiga-img">
                <img src="{{ asset('images/meruBetiri/Pulau 3.png') }}" alt="Pulau-3">
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <!-- <script src="{{ asset('') }}"></script> -->
@endsection

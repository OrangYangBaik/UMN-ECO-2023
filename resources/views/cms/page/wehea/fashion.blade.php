@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/fashion.css') }}">
@endsection

@section('content')
<div class="fashion-outer">
<div class="container-fashion">
        <div class="manekin1">
            <img src="{{ asset('images/wehea/fashion/Fashion/Manekin.svg') }}">
        </div>
        <div class="manekin2">
            <img src="{{ asset('images/wehea/fashion/Fashion/Manekin.svg') }}">
        </div>
        <div class="manekin3">
            <img src="{{ asset('images/wehea/fashion/Fashion/Manekin.svg') }}">
        </div>
        <div class="cermin">
            <img src="{{ asset('images/wehea/fashion/Fashion/cermin.svg') }}">
        </div>
        <div class="lukisan">
            <img src="{{ asset('images/wehea/fashion/Fashion/Lukisan 1.svg') }}">
        </div>
        <div class="nala">
            <img src="{{ asset('images/wehea/fashion/Fashion/nala peta.svg') }}">
        </div>
        <div class="rakBaju">
            <img src="{{ asset('images/wehea/fashion/Fashion/Rak Baju.svg') }}">
        </div>
        <div class="baju">
            <img src="{{ asset('images/wehea/fashion/Fashion/Baju.svg') }}">
        </div>
        <div class="celana">
            <img src="{{ asset('images/wehea/fashion/Fashion/Celana.svg') }}">
        </div>
        <div class="dress">
            <img src="{{ asset('images/wehea/fashion/Fashion/Dress.svg') }}">
        </div>
        </div>  
</div>
@endsection

@section('custom-js')
@endsection

@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/merubetiri/merubetiri.css') }}">
@endsection

@section('content')
    <div class="gradient__bg"></div>
        <div class="container">
            <div class="decor-meru">
                <img src="{{ asset('images/merubetiri/decor meru bertiri.svg') }}" alt="">
            </div>
            <div class="triangle">
                <img src="{{ asset('images/merubetiri/Triangle.svg) }}" alt="">
            </div>
            <div class="peralatan">
                <div class="tumbler">
                    <img src="{{ asset('images/merubetiri/Tumblr.svg) }}" alt="">
                </div>
                <div class="cutlery-img">
                    <img src="{{ asset('images/merubetiri/Cutlery.svg) }}" alt="">
                </div>
                <div class="number-run">
                    <img src="{{ asset('images/merubetiri/Numberrun.svg) }}" alt="">
                </div>
            </div>
            <div class="nala-doorprize">
                <img src="{{ asset('images/merubetiri/doorprize mascot.svg) }}" alt="">
            </div>
        </div>
@endsection

@section('custom-js')
@endsection

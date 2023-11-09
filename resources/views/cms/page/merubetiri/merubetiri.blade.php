@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/meruBetiri/merubetiri.css') }}">
@endsection

@section('content')
    <div class="gradient__bg"></div>
        <div class="container-meru">
            <div class="decor-meru">
                <img src="{{ asset('images/meruBetiri/decor meru bertiri.svg') }}" alt="">
            </div>
            <div class="triangle">
                <img src="{{ asset('images/meruBetiri/Triangle.svg') }}" alt="">
            </div>
            <div class="peralatan">
                <div class="tumbler">
                    <img src="{{ asset('images/meruBetiri/Tumblr.svg') }}" alt="">
                </div>
                <div class="cutlery-img">
                    <img src="{{ asset('images/meruBetiri/Cutlery.svg') }}" alt="">
                </div>
                <div class="number-run">
                    <img src="{{ asset('images/meruBetiri/Numberrun.svg') }}" alt="">
                </div>
            </div>
            <div class="nala-doorprize">
                <img src="{{ asset('images/meruBetiri/doorprize mascot.svg') }}" alt="">
            </div>
        </div>
@endsection

@section('custom-js')
@endsection

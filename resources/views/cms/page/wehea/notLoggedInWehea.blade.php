@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/weheaRestricted.css') }}">
@endsection

@section('content')
    <div class="wehea-restricted-container text-center">
        <div class="wehea-restricted-content">
            <div class="gerbang-wehea">
                <img src="{{ asset('images/wehea/Gerbang 2.svg') }}" alt="Gerbang Wehea" />
            </div>
            <div class="penjaga-nala-wehea">
                <img src="{{ asset('images/wehea/Penjaga nala.svg') }}" alt="Penjaga Nala" />
            </div>

            <div class="chat-box-restricted-wehea-container">
                <div class="chat-box-restricted-wehea">
                    <div class="triangle-restricted-wehea"></div>
                    <div>Selamat datang, petualang! Untuk mendaftar ke acara Hidden City in Wehea, Anda perlu mengisi data
                        diri terlebih dahulu!</div>
                    <a href="/login">
                        <button type="button">Isi Data Diri</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection

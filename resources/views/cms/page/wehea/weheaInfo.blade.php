@extends('cms.template.app')

@section('custom-css')
@endsection

@section('content')
    <div class="container" style="padding-top: 100px !important;">
        <p>Nama: {{ $nama }}</p>
        <p>NIM: {{ $nim }}</p>
        <p>Kredit: {{ $credit }}</p>
        <p>Point: {{ $point }}</p>
        <p>Atasan: {{ $atasan }}</p>
        <p>Bawahan: {{ $bawahan }}</p>
        <p>Aksesoris: {{ $aksesoris }}</p>
    </div>
@endsection

@section('custom-js')
@endsection

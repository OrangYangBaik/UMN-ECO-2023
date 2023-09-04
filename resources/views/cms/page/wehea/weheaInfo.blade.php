@extends('cms.template.app')

@section('custom-css')
@endsection

@section('content')
    <div class="container" style="padding: 100px 0 50px 0;">
        <p>Nama: {{ $nama }}</p>
        <p>NIM: {{ $nim }}</p>
        <p>Kredit: {{ $credit }}</p>
        <p>Point: {{ $point }}</p>
        <p>Kupon Atasan: {{ $atasan }}</p>
        <p>Kupon Bawahan: {{ $bawahan }}</p>
        <p>Kupon Aksesoris: {{ $aksesoris }}</p>
    </div>
@endsection

@section('custom-js')
@endsection

@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/nawasena/thanksNawasena.css') }}">
@endsection

@section('content')
    <div class="thanks-nawasena-container text-center">
        <div class="thanks-nawasena-content">
            <h1>Terima kasih telah mendaftar di acara Nawasena UMN ECO 2023!</h1>
            <div>Silakan bergabung ke dalam grup LINE pada tombol di bawah ini.</div>
            <a href="https://line.me/R/ti/g/TDmeH4OgrT" target="_blank">
                <button type="button">Bergabung</button>
            </a>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection

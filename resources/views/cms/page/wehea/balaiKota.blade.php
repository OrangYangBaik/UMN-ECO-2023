@extends('cms.template.app')

@section('custom-css')
@endsection

@section('content')
    <div class="d-flex align-items-center flex-column container" style="padding: 100px 0 50px 0;">

        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/wehea/info" class="text-decoration-none text-white">View my info</a>
            </button>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageMain" class="text-decoration-none text-white">Scan QR Code Arcade</a>
            </button>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageDapatKupon" class="text-decoration-none text-white">Scan QR Code Get Kupon</a>
            </button>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageKurangKupon" class="text-decoration-none text-white">Scan QR Code Tukar Kupon</a>
            </button>

        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageDapatCredit" class="text-decoration-none text-white">Scan QR Code Side Quest</a>
            </button>

        </div>
        <div class="mb-3">
            <button class="btn btn-primary" style="width: 300px;">
                <a href="/scannerPageMerchandise" class="text-decoration-none text-white">Scan QR Code Merchandise</a>
            </button>
        </div>
        <form action="/wehea/register" method="post">
            @csrf
            <button type="submit" class="btn btn-primary" style="width: 300px;">Join Wehea</button>
        </form>

    </div>
@endsection

@section('custom-js')
@endsection

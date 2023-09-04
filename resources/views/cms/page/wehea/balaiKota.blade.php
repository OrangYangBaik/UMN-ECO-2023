@extends('cms.template.app')

@section('custom-css')
@endsection

@section('content')
    <div class="container" style="padding: 100px 0 50px 0;">
        <form action="/wehea/register" method="post">
            @csrf
            <button type="submit" class="btn btn-primary my-3">Join Wehea</button>
        </form>
        <div class="mb-3">
            <a href="/wehea/info">View my info</a>
        </div>
        <div>
            <a href="/scannerPageMain">Scan QR Code Arcade</a>
        </div>
        <div>
            <a href="/scannerPageDapatKupon">Scan QR Code Get Kupon</a>
        </div>
        <div>
            <a href="/scannerPageKurangKupon">Scan QR Code Tukar Kupon</a>
        </div>
        <div>
            <a href="/scannerPageDapatCredit">Scan QR Code Side Quest</a>
        </div>
        <div>
            <a href="/scannerPageMerchandise">Scan QR Code Merchandise</a>
        </div>
    </div>
    </div>
@endsection

@section('custom-js')
@endsection

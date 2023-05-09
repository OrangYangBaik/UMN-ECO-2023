@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/landingDrought.css') }}">
@endsection

@section('content')

<div class="main">
    <div class="container content d-flex flex-column justify-content-start align-items-center text-center">
        <div class="content-title">
            DROUGHT: DETERMINE THE WAY OUT
        </div>
        <div class="content-desc d-sm-block d-none">
            Kekeringan seringkali menjadi isu yang berkaitan dengan musim kemarau di Nusantara. 
            <br>
            Maukah kamu bergabung menjadi ECO Player dalam mencari jalan keluar dari isu musim kemarau yang mungkin saja terjadi?
        </div>
    </div>
        <a href="{{ route('info') }}"><img src="{{ asset('images/landingDrought/portal.gif')}}" alt="" class="portal"></a>
        <img src="{{ asset('images/landingDrought/candi.png')}}" alt="" class="candi">
        <img src="{{ asset('images/landingDrought/tanahkanan.png')}}" alt="" class="tanah-kanan">
        <img src="{{ asset('images/landingDrought/tanahkiri.png')}}" alt="" class="tanah-kiri">
        <img src="{{ asset('images/landingDrought/gunung/gunungkiri.png')}}" alt="" class="gunung-kiri d-none d-md-block">
        <img src="{{ asset('images/landingDrought/gunung/gunungkanan.png')}}" alt="" class="gunung-kanan d-none d-md-block">
        <img src="{{ asset('images/landingDrought/gunung/mobile-gunung-kiri.png')}}" alt="" class="mobile-gunung-kiri d-md-none d-block">
        <img src="{{ asset('images/landingDrought/gunung/mobile-gunung-kiri.png')}}" alt="" class="mobile-gunung-kanan d-md-none d-block">

</div>



@include('cms.template.footer')

@endsection

@section('custom-js')
<script src="{{ asset('js/cms/page/landingDrought.js') }}"></script>
   
@endsection
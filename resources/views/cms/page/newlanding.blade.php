@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/newlanding.css') }}">
@endsection

@section('content')

<div class="main">

    <div class="section-1">
        <!-- Desktop  -->
        <div class="container-nonover d-none d-md-block">
            <img src="{{ asset('images/landing/umn-eco-logo.png')}}" alt="" class="eco-logo" style="">
            <img src="{{ asset('images/landing/wide/batu-bg-welcome.png')}}" class="rock-bg-1" alt="">
            <img src="{{ asset('images/landing/wide/waterfall2.gif')}}" class=" waterfall_1 " alt="">
            <img src="{{ asset('images/landing/GapuraKanan.png')}}" alt="" class="gapura-kanan" style="">
            <img src="{{ asset('images/landing/GapuraKiri.png')}}" alt="" class="gapura-kiri" style="">
        </div>
        <img src="{{ asset('images/landing/wide/transition-bg-1.png')}}" class=" transition-bg-1  d-none d-md-block" alt="">
        <!-- end -->

        <!-- Mobile  -->
        <div class="container-nonover d-block d-md-none">
            <img src="{{ asset('images/landing/umn-eco-logo.png')}}" alt="" class="eco-logo" style="">
            <img src="{{ asset('images/landing/wide/waterfall2.gif')}}" class=" waterfall_1 " alt="">
            <img src="{{ asset('images/landing/GapuraKanan.png')}}" alt="" class="gapura-kanan" style="">
            <img src="{{ asset('images/landing/GapuraKiri.png')}}" alt="" class="gapura-kiri" style="">
        </div>
        <img src="{{ asset('images/landing/Batu_1.png')}}" class=" transition-bg-1 d-block d-md-none position-absolute " alt="">
        <!-- end -->
        
    </div>
    <div class="section-2 d-flex align-items-center">

        <div class="container-nonover">
            <img src="{{ asset('images/landing/wide/waterfalltinggi1.gif')}}" class=" waterfall_2 d-none d-md-block" alt="">
            <img src="{{ asset('images/landing/waterfall-mob.gif')}}" class=" waterfall_2 d-block d-md-none" alt="">
        </div>
        <div class="content container  h-100">
            <div class="row justify-content-start">
                <div class="col-md-6 col-10">
                    <div class="title-1 d-flex justify-content-between w-100">
                        <h1>EARTH CARING OPERATION</h1>
                    </div>
                    <div class="desc-1 mb-3">
                        <p>Setelah berhasil melewati dua iklim Nusantara yang mempunyai pengaruh besar terhadap alam pada rangkaian 
                            kegiatan “Dynamic Seasons of Nusantara” di tahun 2022, UMN ECO kembali hadir membawakan kabar gembira berupa 
                            petualangan-petualangan menarik di waktu yang akan datang. 

                        </p>
                    </div>
                    <div class="title-2">
                        <h1>WE ACT FOR THE BETTER EARTH!</h1>
                    </div>
                    <div class="desc-2">
                        <p>Kerusakan alam saat ini sudah terpampang secara jelas di depan mata kita, 
                            bahkan terlihat hanya dengan mengintip keluar dari jendela kamar saja. Hal ini tentunya menjadi suatu pertanda 
                            bahwa keadaan bumi kita sudah semakin memprihatinkan. Oleh karena itu, UMN ECO 2023 kembali membukakan jalan 
                            bagi ECO Friends semua untuk menjadi agen perubahan demi kebaikan bumi kita bersama.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/landing/wide/transition-bg-2.png')}}" class=" transition-bg-2  d-md-block d-none" alt="">
        <img src="{{ asset('images/landing/wide/bg-batu-right.png')}}" class=" bg-batu-right" alt="">
        <img src="{{ asset('images/landing/Batu_2.png')}}" class=" transition-bg-2 d-block d-md-none" alt="">
        
    </div>
    <div class="section-3 d-flex align-items-center">
        <img src="{{ asset('images/landing/wide/waterfalltinggi1.gif')}}" class=" waterfall_3" alt="">
        <img src="{{ asset('images/landing/wide/bottom.png')}}" class="bottom-border" alt="">
        <img src="{{ asset('images/landing/wide/Batu_BG_3_right.png')}}" class=" bg-batu-left" alt="">
        <div class="content container  h-100">
            <div class="row justify-content-end ">
                <div class="col-md-6 col-10">
                    <div class="title-1">
                        <h1>VISI</h1>
                    </div>
                    <div class="desc-1">
                        <p>Membangkitkan kesadaran dan kepedulian ECO Friends terhadap berbagai permasalahan lingkungan khususnya tentang isu carbon footprint yang tengah melanda dunia secara keseluruhan demi keberlanjutan bumi. 
                        </p>
                    </div>
                    <div class="title-2">
                        <h1>MISI</h1>
                    </div>
                    <div class="desc-2">
                        <p>Membangun UMN ECO menjadi sebuah organisasi yang dapat berfungsi sebagai wadah bagi para ECO Friends untuk bersama-sama mengambil peran secara aktif dalam memanifestasikan lingkungan berkelanjutan.
                        </p>
                        <p>Mengelola berbagai rangkaian kegiatan yang mencerminkan nilai-nilai SDG, khususnya pada poin ke-12, ke-13, ke-14, dan ke-15.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('cms.template.footer')

@endsection

@section('custom-js')
<script src="{{ asset('js/cms/page/landing.js') }}"></script>
   
@endsection
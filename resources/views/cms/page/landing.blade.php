@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/landing.css') }}">
@endsection

@section('content')
<div id="home" class="main position-relative">
    <!-- asset dispaly lebar  -->
    <img src="{{ asset('images/landing/bg-welcome.png')}}" class=" bg-welcome d-none d-md-block position-absolute " alt="">
    <img src="{{ asset('images/landing/bg-2.png')}}" class=" bg-2 d-none d-md-block position-absolute " alt="">
    <!-- section-1  -->
    <img src="{{ asset('images/home/umn-eco-logo.png')}}" alt="" class="position-absolute d-none d-md-block umn-eco-logo" style="">
    <img src="{{ asset('images/landing/wide/batu-bg-welcome.png')}}" class=" batu-bg d-none d-md-block position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/waterfall2.gif')}}" class=" waterfall_1 d-none d-md-block position-absolute " alt="">
    <img src="{{ asset('images/landing/GapuraKanan.png')}}" alt="" class="position-absolute d-none d-md-block gapura-kanan " style="">
    <img src="{{ asset('images/landing/GapuraKiri.png')}}" alt="" class="position-absolute d-none d-md-block gapura-kiri " style="">
    <img src="{{ asset('images/landing/wide/transition-bg-1.png')}}" class=" transition-bg-1 d-none d-md-block position-absolute " alt="">
    <!-- section-2 -->
    <img src="{{ asset('images/landing/wide/waterfall3.gif')}}" class=" waterfall_3 d-none d-md-block position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/transition-bg-2.png')}}" class=" transition-bg-2 d-none d-md-block position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/waterfall3.gif')}}" class=" waterfall_4 d-none d-md-block  position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/Batu_BG_3_right.png')}}" class=" bg-batu-left d-none d-md-block position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/Batu_BG_3_right.png')}}" class=" bg-batu-left-2 d-none d-md-block position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/bg-batu-right.png')}}" class=" bg-batu-right d-none d-md-block position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/bottom.png')}}" class=" bottom-border position-absolute " alt="">
    
    <!-- asset HP  -->
    <img src="{{ asset('images/landing/bg-2.png')}}" class=" bg-2-extend d-block d-md-none position-absolute " alt="">
    <img src="{{ asset('images/home/umn-eco-logo.png')}}" alt="" class="position-absolute d-block d-md-none umn-eco-logo" style="">

    <img src="{{ asset('images/landing/BG1.png')}}" class=" bg-welcome d-block d-md-none position-absolute " alt="">
    <img src="{{ asset('images/landing/bg-2.png')}}" class=" bg-2 d-block d-md-none position-absolute " alt="">
    <img src="{{ asset('images/landing/Batu_1.png')}}" class=" transition-bg-1 d-block d-md-none position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/waterfall1.gif')}}" class=" waterfall_1 d-block d-md-none position-absolute " alt="">
    <img src="{{ asset('images/landing/GapuraKanan.png')}}" alt="" class="position-absolute d-block d-md-none gapura-kanan " style="">
    <img src="{{ asset('images/landing/GapuraKiri.png')}}" alt="" class="position-absolute d-block d-md-none gapura-kiri " style="">
    

    <img src="{{ asset('images/landing/waterfall_2.gif')}}" class=" waterfall_3 d-block d-md-none position-absolute " alt="">
    <img src="{{ asset('images/landing/Batu_2.png')}}" class=" transition-bg-2 d-block d-md-none position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/bg-batu-right.png')}}" class=" bg-batu-right d-block d-md-none position-absolute " alt="">

    <img src="{{ asset('images/landing/waterfall_2.gif')}}" class=" waterfall_4  d-block d-md-none  position-absolute " alt="">
    <img src="{{ asset('images/landing/wide/Batu_BG_3_right.png')}}" class=" bg-batu-left-2  d-block d-md-none position-absolute " alt="">
  
    <div class="w-100 position-absolute d-flex align-items-center text-content text-content-1">

        <div class="px-2 px-md-5 mx-auto ">
            <div class="row w-100">
                <div class="col-lg-6 col-8">
                    <!-- desktop  -->
                    <div class="eco-desc-title d-none d-md-flex justify-content-between">
                        <h4 class="">EARTH CARING OPERATION</h4>
                    </div>
                    <div class="tagline-content eco-desc-content d-none d-md-block mt-md-3 pb-md-5 mt-1 pb-3">
                        UMN ECO merupakan kegiatan mahasiswa dinaungi BEM UMN yang bertujuan untuk membangun kesadaran mahasiswa dengan melakukan aksi nyata dalam melestarikan lingkungan di bumi. 
                        <br><br>
                        ECO merupakan singkatan dari <em>Earth, Caring, & Operation</em> yang berarti tidak merusak dan membahayakan lingkungan.
                    </div>
                    <div class="tagline-title d-none d-md-block">
                        <h4 class="text-start">WE ACT FOR THE BETTER EARTH!</h4>
                    </div>
                    <div class="tagline-content d-none d-md-block mt-md-3 pb-md-5 mt-1 pb-3">
                        Melalui penggunaan tagline ini, kami bertujuan untuk mengajak ECO Friends dalam melakukan aksi nyata demi mewujudkan bumi yang lebih baik.
                    </div>
                    <!-- hp  -->
                    <div class="eco-desc-title d-flex d-md-none flex-column justify-content-between">
                        <h4 class="text-start">EARTH</h4>
                        <h4 class="text-center" style="padding-right: 25px;">CARING</h4>
                        <h4 class="text-end">OPERATION</h4>
                    </div>
                    <div class="eco-desc-content d-block d-md-none">
                        UMN ECO merupakan kegiatan mahasiswa dinaungi BEM UMN yang bertujuan untuk membangun kesadaran mahasiswa dengan melakukan aksi nyata dalam melestarikan lingkungan di bumi. 
                        <br><br>
                        ECO merupakan singkatan dari <em>Earth, Caring, & Operation</em> yang berarti tidak merusak dan membahayakan lingkungan.
                    </div>
                    <div class="tagline-title mt-3 d-block d-md-none">
                        <h4 class="text-start">WE ACT FOR THE BETTER EARTH!</h4>
                    </div>
                    <div class="tagline-content d-block d-md-none">
                        Melalui penggunaan tagline ini, kami bertujuan untuk mengajak ECO Friends dalam melakukan aksi nyata demi mewujudkan bumi yang lebih baik.
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    
    <div class="w-100 justify-content-end position-absolute d-flex align-items-center text-content text-content-2">
        <div class="px-2 px-md-5 text-content pb-5">
            <div class="row w-100 justify-content-end pb-5">
                <div class="col-lg-6 col-7">
                    <div class="title-vm text-end">VISI</div>
                    <div class="text-end visi-content mt-md-3 pb-md-5 mt-1 pb-3">
                        Mewujudkan pribadi yang peduli, berintegritas, serta bertanggung jawab terhadap lingkungan hidup mereka.
                    </div>
                    <div class="title-vm text-end">MISI</div>
                    <div class="text-end misi-content mt-md-3 pb-md-5 mt-1 pb-3">
                        Menghadirkan organisasi yang berfungsi sebagai wadah bagi para ECO Friends (masyarakat) untuk berperan aktif dalam melestarikan lingkungan.
                        <br><br>
                        Menyelenggarakan kegiatan yang mencerminkan perwujudan Sustainable Development Goals (SDGs), khususnya pada poin 12 dan 13.
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
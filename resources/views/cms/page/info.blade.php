@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/info.css') }}">

@endsection

@section('content')

    <div class="container bungkus">
        <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container py-5 d-flex flex-column container-text">
                        <h1 class="text-center my-lg-4 my-md-3 ">AKSI HEMAT AIR</h1>
                        <p class="text-center px-sm-5">ECO Players! Ayo kita membagikan edukasi kepada orang lain untuk bisa menghemat air di musim kemarau bersama Maru agar kita bisa mengantisipasi kekeringan yang mungkin terjadi.</p>
                        <a href="{{ route('loginDrought') }}"><div type="button" class="btn btn-dark mx-auto rounded-pill start-btn">Start</div></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container py-5 d-flex flex-column container-text">
                        <h1 class="text-center my-lg-4 my-md-3 ">KISAHKU MENGHADAPI <br /> KEKERINGAN</h1>
                        <p class="text-center px-sm-5">Apakah ECO Players pernah punya pengalaman mencegah kekeringan? Ceritakan dong, Maru ingin dengar! Cerita kalian dapat memotivasi teman-teman Maru dalam ikut mencegah kekeringan, lho!</p>
                        <a href="{{ route('loginDrought') }}"><div type="button" class="btn btn-dark mx-auto rounded-pill start-btn">Start</div></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container py-5 d-flex flex-column container-text">
                        <h1 class="text-center my-lg-4 my-md-3 px-md-5">MENILIK ISU LINGKUNGAN NUSANTARA</h1>
                        <p class="text-center px-sm-5">Ayo, ECO Players! Mari ikut Maru bagikan edukasi tentang isu kekeringan yang pernah terjadi di Nusantara, agar banyak orang sadar bahwa kekeringan tidak dapat disepelekan!</p>
                        <a href="{{ route('loginDrought') }}"><div type="button" class="btn btn-dark mx-auto rounded-pill start-btn">Start</div></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container py-5 d-flex flex-column container-text">
                        <h1 class="text-center my-lg-4 my-md-3">TOLONG RAWAT <br /> TEMAN MARU</h1>
                        <p class="text-center px-sm-5">Bahaya! Musim kemarau yang terik bisa membuat segala hal yang ada di bumi menjadi kering, lho! ECO Players, tolong rawat teman-teman Maru, ya, agar tak rusak dan mati!</p>
                        <a href="{{ route('loginDrought') }}"><div type="button" class="btn btn-dark mx-auto rounded-pill start-btn">Start</div></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container py-5 d-flex flex-column container-text">
                        <h1 class="text-center my-lg-4 my-md-3">MARU DAN AIR SERBA GUNA</h1>
                        <p class="text-center px-sm-5">Tidak boleh boros air, tetapi tetap harus memberikan asupan air untuk para tanaman. Nah, ECO Players, bagaimana kalau kita gunakan air bekas yang masih layak untuk menyiram teman-teman Maru?</p>
                        <a href="{{ route('loginDrought') }}"><div type="button" class="btn btn-dark mx-auto rounded-pill start-btn">Start</div></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container py-5 d-flex flex-column container-text">
                        <h1 class="text-center my-lg-4 my-md-3">CUCI, HEMAT, CERMAT</h1>
                        <p class="text-center px-sm-5">Maru mau cuci baju, nih! Apakah ECO Players bisa bantu Maru hemat air selama Maru mencuci? </p>
                        <a href="{{ route('loginDrought') }}"><div type="button" class="btn btn-dark mx-auto rounded-pill start-btn">Start</div></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container py-5 d-flex flex-column container-text">
                        <h1 class="text-center my-lg-4 my-md-3">TANAM TEMAN MARU (TTM)</h1>
                        <p class="text-center px-sm-5">Polusi di musim kemarau semakin pekat, kita harus menambah teman-teman Maru, para tanaman! Maukah ECO Players membantu Maru menanam tanaman baru?</p>
                        <a href="{{ route('loginDrought') }}"><div type="button" class="btn btn-dark mx-auto rounded-pill start-btn">Start</div></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container py-5 d-flex flex-column container-text">
                        <h1 class="text-center my-lg-4 my-md-3">TANAMAN BERMICIN</h1>
                        <p class="text-center px-sm-5">ECO Players tahu, kan, kalau peran tanaman sangat penting di musim kemarau untuk menghijaukan bumi yang gersang?. Yuk bareng Maru, kita beri nutrisi pada teman-teman Maru!</p>
                        <a href="{{ route('loginDrought') }}"><div type="button" class="btn btn-dark mx-auto rounded-pill start-btn">Start</div></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container py-5 d-flex flex-column container-text">
                        <h1 class="text-center my-lg-4 my-md-3">PANDEMI? BIJAK AIR!</h1>
                        <p class="text-center px-sm-5">Maru khawatir banyak sekali air yang terbuang di masa pandemi, tetapi kita juga harus menghemat air di musim yang kering ini. Apakah ECO Players tahu bagaimana cara menghemat air di masa pandemi?</p>
                        <a href="{{ route('loginDrought') }}"><div type="button" class="btn btn-dark mx-auto rounded-pill start-btn">Start</div></a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <img src="{{ asset('images/info/prevbutton.png')}}" />
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <img src="{{ asset('images/info/nextbutton.png')}}" />
                <span class="visually-hidden">Next</span>
            </button>
            </div>
             <img src="{{ asset('images/info/mascot-new.gif')}}" alt="" class="mascot"> 
            <img src="{{ asset('images/info/frame.svg')}}" alt="" class="frame position-absolute top-0">
            <img src="{{ asset('images/info/batukiri.png')}}" alt="" class="batukiri position-absolute">
            <img src="{{ asset('images/info/batukanan.png')}}" alt="" class="batukanan position-absolute">
            <img src="{{ asset('images/info/palang2.png')}}" alt="" class="palang position-absolute">
            
    </div>

    @include('cms.template.footer')    
    
@endsection
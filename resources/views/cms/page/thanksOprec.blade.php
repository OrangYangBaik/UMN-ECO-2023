@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/oprec-thanks.css') }}">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> -->

@endsection

@section('content')

<div class="main">
    <div class="section-1">
        <img src="{{ asset('images/umn-eco-logo.png')}}" alt="" class="logo-eco-umn">
        <div class="container position-relative section-1" >
            <div class="slider">
                <div class="slider-inner">
                    @foreach($teams->unique('name') as $team)
                        <img class="slider-item" width="10%" src="{{ asset('images/oprec2/logo/'.$team->name.'.png') }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container text-section pb-5 col-lg-5 col-md-8 col-sm-10 col-12">
        <p>
            Terima kasih telah mendaftarkan diri menjadi bagian dari ECO Family! <br>
            Untuk segala informasi lebih lanjut mengenai UMN ECO dan perihal recruitment ini akan kami sampaikan melalui instagram UMN ECO <b>@umn_eco.</b><br>
            Sampai bertemu lagi!
        </p>
        <br>
        <p>
            We Act for The Better Earth!
        </p>

    </div>
</div>

@include('cms.template.footer')

@endsection


<!-- Javascript -->
@section('custom-js')
@endsection
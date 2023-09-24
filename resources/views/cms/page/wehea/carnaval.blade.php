@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/wehea/carnaval.css') }}">
@endsection

@section('content')
<div class="outer-container-carnaval">
    <div class="container-carnaval">
      <!-- <div class="background-1"></div>
      <div class="background-2"></div> -->
      <img class="background-carnaval" src="{{ asset('images/wehea/carnaval/Background.png') }}" />
      <img class="dekor1-1-carnaval" src="{{ asset('images/wehea/carnaval/Dekor carnaval 1.svg') }}" />
      <img class="dekor1-2-carnaval" src="{{ asset('images/wehea/carnaval/Dekor carnaval 1.svg') }}" />
      <img class="dekor4-carnaval" src="{{ asset('images/wehea/carnaval/Dekor carnaval 4.svg') }}" />
      <!-- <img class="salinan-balon-1-carnaval" src="{{ asset('images/wehea/carnaval/Salinan Balon 1.svg') }}" />
      <img class="salinan-balon-2-carnaval" src="{{ asset('images/wehea/carnaval/Salinan Balon 2.svg') }}" />
      <img class="balon-nala-carnaval" src="{{ asset('images/wehea/carnaval/Balon nala.svg') }}" />
      <img class="confetti-1-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" />
      <img class="confetti-2-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" />
      <img class="confetti-3-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" />
      <img class="confetti-4-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" />
      <img class="confetti-5-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" /> -->
      <img class="full-confetti-carnaval" src="{{ asset('images/wehea/carnaval/Full Confetti.svg') }}" />
      <div class="ferris-wheel-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Ferris wheel.svg') }}" />
      </div>
      <div class="market-makanan-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Market makanan.svg') }}" />
      </div>
      <div class="market-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Market.svg') }}" />
      </div>
      <div class="carousel-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Carousel.svg') }}" />
      </div>
      <div class="carnaval-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Carnaval.svg') }}" />
      </div>
      <div class="swing-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Swing.svg') }}" />
      </div>
      <div class="tenda-biru-muda-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Tenda karnaval biru muda.svg') }}" />
      </div>
      <div class="tanda-seru-biru-carnaval">
        <span>!</span>
        <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}" alt="bottom beak">
      </div>
      <div class="tenda-biru-tua-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Tenda karnaval biru tua.svg') }}" />
      </div>
      <div class="tanda-seru-biru-tua-carnaval">
        <span>!</span>
        <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}" alt="bottom beak">
      </div>
      <div class="tenda-kuning-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Tenda karnaval kuning.svg') }}" />
      </div>
      <div class="tanda-seru-kuning-carnaval">
        <span>!</span>
        <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}" alt="bottom beak">
      </div>
      <div class="tenda-merah-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Tenda karnaval merah.svg') }}" />
      </div>
      <div class="tanda-seru-merah-carnaval">
        <span>!</span>
        <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}" alt="bottom beak">
      </div>
      <div class="tenda-oren-carnaval">
        <img src="{{ asset('images/wehea/carnaval/Tenda karnaval oren.svg') }}" />
      </div>
      <div class="tanda-seru-oren-carnaval">
        <span>!</span>
        <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}" alt="bottom beak">
      </div>
      <img class="nala-carnival" src="{{ asset('images/wehea/carnaval/Nala balai kota.svg') }}">
    </div>
  </div>
@endsection

@section('custom-js')
@endsection

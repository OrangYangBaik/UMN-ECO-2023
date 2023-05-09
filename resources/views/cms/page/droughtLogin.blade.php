@extends('cms.template.app')

@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/cms/page/droughtRegis.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cms/page/landingDrought.css') }}">

@endsection

@section('content')

<div class="main">
  <div class="container drought-form">
    <div class="py-3 overlay-background justify-content-center d-flex flex-column">
        <img src="{{ asset('images/drought-logo.png')}}" class="py-3 umn-eco-logo text-center m-auto"></img>

        {{-- <h1 class="text-center m-auto py-3">WELCOME BACK!</h1> --}}
        @if (session('status'))
          <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
            {{ session('status') }}
          </div>
        @endif
        <div class="container mt-1 d-flex justify-content-center m-auto">
          <form action="{{ route('loginVerification') }}" method="POST" id="form-login">
            @csrf 
            <div class="mb-3">
              <input type="email" class="form-control" id="email" name="email_student" placeholder="Email Address">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="d-flex justify-content-center w-100 flex-column text-center">
              <button type="submit" class="button-submit mx-auto">LOGIN</button>
            </div>

          
            <div class="d-flex justify-content-center w-100 flex-column text-center text-color-green">
              <div class="pt-3">
                @if($feature->where('features','==','Registration')->first()->status)
                  <p class="mb-0 text-white text-center">Belum memiliki akun? <br class="d-block d-sm-none"/><a href="{{ route('regulation') }}"  class="ps-1 text-color-green">Daftar di sini!</a></p>
                @endif
                <p class="mt-2 contact-us text-white text-center">Jika Anda mengalami kendala, <br>silakan <a href="#">hubungi kami</a> melalui LINE Official Account</p>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
        <img src="{{ asset('images/landingDrought/candi.png')}}" alt="" class="candi">
        <img src="{{ asset('images/landingDrought/tanahkanan.png')}}" alt="" class="tanah-kanan">
        <img src="{{ asset('images/landingDrought/tanahkiri.png')}}" alt="" class="tanah-kiri">
        <img src="{{ asset('images/landingDrought/gunung/gunungkiri.png')}}" alt="" class="gunung-kiri d-none d-md-block">
        <img src="{{ asset('images/landingDrought/gunung/gunungkanan.png')}}" alt="" class="gunung-kanan d-none d-md-block">
        <img src="{{ asset('images/landingDrought/gunung/mobile-gunung-kiri.png')}}" alt="" class="mobile-gunung-kiri d-md-none d-block">
        <img src="{{ asset('images/landingDrought/gunung/mobile-gunung-kiri.png')}}" alt="" class="mobile-gunung-kanan d-md-none d-block">

</div>



@endsection

@section('custom-js')
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="{{ asset('js/cms/page/login-validation.js') }}"></script>
@endsection
@extends('cms.template.app')

@section('custom-css')
  <link href={{ asset("css/cms/page/login-forget-downpour/style2.css") }} rel="stylesheet"/>
@endsection

@section('content')
<div class="page">
  <div class="backdrop">
      <div class="hills">
          <img src={{ asset('images/loginDownpour/hills.png') }} alt="hills">
      </div>
      <div class="buildingKiri">
          <img src={{ asset('images/loginDownpour/buildingKiri.png') }} alt="buildingKiri">
      </div>
      <div class="buildingKanan">
          <img src={{ asset('images/loginDownpour/buildingKanan.png') }} alt="buildingKanan">
      </div>
      <div class="bridgeHanger">
          <img src={{ asset('images/loginDownpour/bridgeHanger.png') }} alt="bridgeHanger">
      </div>
  </div>
  <div class="formCanvas px-auto m-auto d-flex">
      <div class="container formInput overlay-background my-4 mx-auto py-5 px-5 d-flex flex-column ">
          <img src={{ asset('images/downpour-logo.png') }} alt="" class="umn-eco-logo mx-auto my-3">
          <h1 class="title text-center mx-auto my-1">FORGET PASSWORD</h1>
          <form action="{{ route('email.newPass') }}" method="POST" class="loginForm mx-auto my-3 text-center">
            @csrf
              <div class="mb-2 ">
                  <input type="text" class="form-control" id="verifCode" name="verifCode" placeholder="Verification Code">
                  @error('verifCode')
                    <div class="error-text">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="mb-2 ">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <div class="text-start justify-content-start mt-2">
                    <input type="checkbox" id="showPassword"> Show Password
                  </div>
                  @error('password')
                    <div class="error-text">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="mb-2 ">
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                  <div class="text-start justify-content-start mt-2">
                    <input type="checkbox" id="showPassword2"> Show Confirm Password
                  </div>
                  @error('confirm_password')
                    <div class="error-text">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              
              @if(session('status'))
                <div class="error-text">
                        {{ session('status') }}
                </div>
              @endif
             
              <button type="submit" class="btnSubmit btn btn-primary my-3 py-2 px-4">Reset Password</button>
              <p class="sub-description my-2">
                  If you are having trouble, please <a href="https://www.instagram.com/umn_eco">contact us</a> through our official LINE account.
              </p>
          </form>
      </div>
  </div>
@endsection

@section('custom-js')
<script>
  $(document).ready(function(){
    $('#showPassword').on('change', function(){
      $('#password').attr('type',$('#showPassword').prop('checked')==true?"text":"password"); 
    });
    $('#showPassword2').on('change', function(){
      $('#confirm_password').attr('type',$('#showPassword2').prop('checked')==true?"text":"password"); 
    });
  });
  </script>
@endsection
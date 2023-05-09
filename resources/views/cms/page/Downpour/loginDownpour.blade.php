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
      <div class="container formInput overlay-background my-5 mx-auto py-5 px-5 d-flex flex-column ">
          <img src={{ asset('images/downpour-logo.png') }} alt="" class="umn-eco-logo mx-auto my-2">
          <h1 class="title text-center mx-auto my-2">WELCOME BACK</h1>
          <form action="{{route('loginVerification')}}" method="POST" class="loginForm mx-auto my-3 text-center">
            @csrf
              <div class="mb-3 ">
                  <input type="email" class="form-control" id="email" name="username_student_email" placeholder="E-mail Student">
              </div>
              <div class="mb-3 ">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <div class="text-start justify-content-start mt-2">
                    <input type="checkbox" id="showPassword"> Show Password
                  </div>
              </div>
              @if(session('status'))
              <div class="error-text">
                    {{ session('status') }}
              </div>
              @endif
              <button type="submit" class="btnSubmit btn btn-primary my-3 px-4 py-2">LOGIN</button>
              <p class="description my-2">
                  Don't have an account? <a href="{{ route('downpourRegistration') }}">Register</a>
              </p>
              <p class="sub-description my-2">
                  If you have trouble logging in, please <a href="https://www.instagram.com/umn_eco">contact us</a> through our official LINE account.
              </p>
              <p class="sub-description my-2">
                  Forget password? <a href="{{ route('forgetVerifyPageDownpour') }}">Click Here</a>
              </p>
          </form>
      </div>
  </div>
</div>
@endsection

@section('custom-js')
  <script>
  $(document).ready(function(){
    $('#showPassword').on('change', function(){
      $('#password').attr('type',$('#showPassword').prop('checked')==true?"text":"password"); 
    });
  });
  </script>
@endsection
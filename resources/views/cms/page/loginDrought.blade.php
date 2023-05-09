@extends('cms.template.app')

@section('custom-css')

@endsection

@section('content')

  <div class="container">
    <img src="{{ asset('images/umn-eco-logo.png')}}" class="login-logo"></img>

    <h1>WELCOME BACK</h1>

    <form action="{{ route('loginVerification') }}" method="POST">
      @csrf
      <div class="mb-3 form-floating">
        <input type="email" class="form-control" id="email" name="email_student" placeholder="Username">
        <label for="floatingInput">Email Address</label>
      </div>
      <div class="mb-3 form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <label for="floatingInput">Password</label>
        <div class="text-start justify-content-start mt-2">
          <input type="checkbox" id="showPassword"> Show Password
        </div>
      </div>
      <button type="submit" class="btn btn-primary">LOGIN</button>

      @if($feature->status)
        <p class="description">
            Don't have an account? <a href="{{ route('regulasi') }}">Register</a>
        </p>
      @endif
      <p class="sub-description">
          If you are having trouble logging in, please <a href="https://www.instagram.com/umn_eco">contact us</a> through our official LINE account.
      </p>
    </form>
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
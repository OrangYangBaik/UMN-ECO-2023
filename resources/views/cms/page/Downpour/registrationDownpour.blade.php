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
          <img src={{ asset('images/downpour-logo.png') }} alt="error-text" class="umn-eco-logo mx-auto my-3">
          <h1 class="title text-center mx-auto my-1">WELCOME</h1>
          <form action="{{ route('downpourRegistration') }}" method="POST" class="loginForm mx-auto my-3 text-center">
              @csrf
              <div class="mb-2 ">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value={{ @old('name') }}>
                  @error('name')
                    <div class="error-text">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              
              <div class="mb-2 ">
                  <input type="email" class="form-control" id="email" name="username_student_email" placeholder="E-mail Student" value={{ @old('username_student_email') }}>
                  @error('username_student_email')
                    <div class="error-text">
                        {{ $message }}
                    </div>
                   @enderror
              </div>
              
              <div class="mb-2 ">
                  <input type="text" class="form-control" id="student_id" name="student_id" placeholder="NIM" value={{ @old('student_id') }}>
                  @error('student_id')
                    <div class="error-text">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              
              <div class="mb-2 ">
                <select class="form-select" name="major" placeholder="Jurusan">
                  <option @if(!old('major')) selected @endif disabled value="error-text">Jurusan</option>
                  <option @if(old('major') === 'Informatika') selected @endif value="Informatika">Informatika</option>
                  <option @if(old('major') === "Teknik Komputer") selected @endif value="Teknik Komputer">Teknik Komputer</option>
                  <option @if(old('major') === "Teknik Elektro") selected @endif value="Teknik Elektro">Teknik Elektro</option>
                  <option @if(old('major') === "Teknik Fisika") selected @endif value="Teknik Fisika">Teknik Fisika</option>
                  <option @if(old('major') === "Sistem Informasi") selected @endif value="Sistem Informasi">Sistem Informasi</option>
                  <option @if(old('major') === "Akuntansi") selected @endif value="Akuntansi">Akuntansi</option>
                  <option @if(old('major') === "Manajemen") selected @endif value="Manajemen">Manajemen</option>
                  <option @if(old('major') === "Perhotelan") selected @endif value="Perhotelan">Perhotelan</option>
                  <option @if(old('major') === "Komunikasi Strategis") selected @endif value="Komunikasi Strategis">Komunikasi Strategis</option>
                  <option @if(old('major') === "Jurnalistik") selected @endif value="Jurnalistik">Jurnalistik</option>
                  <option @if(old('major') === "Desain Komunikasi Visual") selected @endif value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                  <option @if(old('major') === "Arsitektur") selected @endif value="Arsitektur">Arsitektur</option>
                  <option @if(old('major') === "Film & Animasi") selected @endif value="Film & Animasi">Film & Animasi</option>
                </select>
                @error('major')
                  <div class="error-text">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="mb-2 ">
                <select class="form-select" name="generation" placeholder="Angkatan">
                  <option @if(!old('generation')) selected @endif disabled value="error-text">Angkatan</option>
                  <option @if(old('generation') === "2018") selected @endif value="2018">2018</option>
                  <option @if(old('generation') === "2019") selected @endif value="2019">2019</option>
                  <option @if(old('generation') === "2020") selected @endif value="2020">2020</option>
                  <option @if(old('generation') === "2021") selected @endif value="2021">2021</option>
                  <option @if(old('generation') === "2022") selected @endif value="2022">2022</option>
                </select>
                @error('generation')
                  <div class="error-text">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="mb-2 ">
                <input type="text" class="form-control" id="line_id" name="line_id" placeholder="ID Line" value={{ @old('line_id') }}>
                @error('line_id')
                  <div class="error-text">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="mb-2 ">
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Nomor Telepon" value={{ @old('telephone') }}>
                @error('telephone')
                  <div class="error-text">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="mb-2 ">
                <input type="text" class="form-control" id="instagram_username" name="instagram_username" placeholder="Username Instagram" value={{ @old('instagram_username') }}>
                @error('instagram_username')
                  <div class="error-text">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="mb-2 ">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  @error('password')
                    <div class="error-text">
                      {{ $message }}
                    </div>
                  @enderror
                  <div class="text-start justify-content-start mt-2">
                    <input type="checkbox" id="showPassword"> Show Password
                  </div>
              </div>
              
              <div class="mb-2 ">
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password" >
                  @error('confirm_password')
                    <div class="error-text">
                      {{ $message }}
                    </div>
                  @enderror
                  <div class="text-start justify-content-start mt-2">
                    <input type="checkbox" id="showPassword2"> Show Confirm Password
                  </div>
              </div>
              
              <button type="submit" class="btnSubmit btn btn-primary my-3 py-2 px-4">REGISTRASI</button>
              <p class="description my-2">
                  Already have an account? <a href="{{ route('loginDownpour') }}">Login</a>
              </p>
              <p class="sub-description my-2">
                  If you are having trouble registering, please <a href="https://www.instagram.com/umn_eco">contact us</a> through our official LINE account.
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
      $('#showPassword2').on('change', function(){
        $('#confirm_password').attr('type',$('#showPassword2').prop('checked')==true?"text":"password"); 
      });
    });
    </script>
@endsection
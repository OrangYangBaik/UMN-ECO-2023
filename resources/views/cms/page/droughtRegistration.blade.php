  @extends('cms.template.app')

@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/cms/page/landingDrought.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cms/page/droughtRegis.css') }}">
@endsection

@section('content')


<div class="main">
<div class="container drought-form">
  <div class="py-3 overlay-background justify-content-center d-flex flex-column text-center">
    <!-- <div class="w-100 d-flex justify-content-center"></div> -->
      <img src="{{ asset('images/drought-logo.png')}}" class="py-4 umn-eco-logo text-center m-auto">
      {{-- <h1 class="text-center m-auto">WELCOME!</h1> --}}
      <div class="container mt-1 d-flex justify-content-center m-auto">
        <form action="{{ route('regisDrought') }}" method="POST" id="form-regist">
            @csrf
            <div class="mb-2">
              <label for="input-email_student" class="form-label"></label>
              <input type="email" class="form-control" id="input-email_student" name="email_student" placeholder="Email">
            </div>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-2">
              <label for="input-password" class="form-label"></label>
              <input type="password" class="form-control" id="input-password" name="password" placeholder="Password">
            </div>
            <div class="mb-2">
              <label for="input-name" class="form-label"></label>
              <input type="text" class="form-control" id="input-name" name="nama" placeholder="Nama Lengkap">
            </div>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-2">
              <label for="input-nim" class="form-label"></label>
              <input type="text" class="form-control @error('nim') is-invalid @enderror" id="input-nim" name="nim" value="{{ old('nim') }}" placeholder="NIM">
              @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror 
            </div>
            <div class="mb-2">
              <label for="input-angkatan" cass="form-label"></label>
              <select class="form-select form-select-md" name="angkatan">
                  <option @if(old('angkatan') != "2018") selected @endif value="2018">2018</option>
                  <option @if(old('angkatan') === "2019") selected @endif value="2019">2019</option>
                  <option @if(old('angkatan') === "2020") selected @endif value="2020">2020</option>
                  <option @if(old('angkatan') === "2021") selected @endif value="2021">2021</option>
              </select>
            </div>
            <div class="mb-2">
                <label for="input-jurusan" class="form-label"></label>
                <select class="form-select form-select-md" name="jurusan">
                    <option @if(old('jurusan') != 'Informatika') selected @endif value="Informatika">Informatika</option>
                    <option @if(old('jurusan') === "Teknik Komputer") selected @endif value="Teknik Komputer">Teknik Komputer</option>
                    <option @if(old('jurusan') === "Teknik Elektro") selected @endif value="Teknik Elektro">Teknik Elektro</option>
                    <option @if(old('jurusan') === "Teknik Fisika") selected @endif value="Teknik Fisika">Teknik Fisika</option>
                    <option @if(old('jurusan') === "Sistem Informasi") selected @endif value="Sistem Informasi">Sistem Informasi</option>
                    <option @if(old('jurusan') === "Akuntansi") selected @endif value="Akuntansi">Akuntansi</option>
                    <option @if(old('jurusan') === "Manajemen") selected @endif value="Manajemen">Manajemen</option>
                    <option @if(old('jurusan') === "Perhotelan") selected @endif value="Perhotelan">Perhotelan</option>
                    <option @if(old('jurusan') === "Komunikasi Strategis") selected @endif value="Komunikasi Strategis">Komunikasi Strategis</option>
                    <option @if(old('jurusan') === "Jurnalistik") selected @endif value="Jurnalistik">Jurnalistik</option>
                    <option @if(old('jurusan') === "Desain Komunikasi Visual") selected @endif value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option @if(old('jurusan') === "Arsitektur") selected @endif value="Arsitektur">Arsitektur</option>
                    <option @if(old('jurusan') === "Film & Animasi") selected @endif value="Film & Animasi">Film & Animasi</option>
                </select>
            </div>
            <div class="mb-2">
              <label for="input-username_instagram" class="form-label"></label>
              <input type="text" class="form-control @error('username_instagram') is-invalid @enderror" id="input-username_instagram" name="username_instagram" value="{{ old('username_instagram') }}" placeholder="Username Instagram">
              @error('username_instagram')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-2">
              <label for="input-id_line" class="form-label"></label>
              <input type="text" class="form-control @error('id_line') is-invalid @enderror"  id="input-id_line" name="id_line" value="{{ old('id_line') }}" placeholder="ID Line">
              @error('id_line')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="input-telephone" class="form-label"></label>
              <input type="text" class="form-control @error('telephone') is-invalid @enderror"  id="input-telephone" name="telephone" value="{{ old('telephone') }}" placeholder="Nomor Telepon">
              @error('telephone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="d-flex justify-content-center w-100 flex-column text-center">
              <button type="submit" class="button-submit mx-auto">REGISTER</button>
            </div>
        </form>
    </div>

    
    <div class="d-flex justify-content-center w-100 flex-column text-center text-color-green">
      <p class="pt-3 mb-0 text-white text-center">Sudah punya akun? <a href="{{ route('loginDrought') }}">Login di sini!</a></p>
      <p class="contact-us mt-2 text-white text-center">Jika Anda mengalami kendala, <br>silakan <a href="#">hubungi kami</a> melalui LINE Official Account</p>
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
  <script src="{{ asset('js/cms/page/regist-validation.js') }}"></script>
@endsection


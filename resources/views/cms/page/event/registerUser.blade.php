@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/registerUser.css') }}">
@endsection


@section('content')
    <div class="register-form">
        <div class="row form-regis container m-auto py-5">
            <div class="col-md-8 m-auto mt-5">
                <h1 class="register-title">WELCOME TO NAWASENA</h1>
                <form action="/register" method="POST" id="form-register" style="width:80%; margin:auto">
                    @csrf
                    <h5 class="mt-3">Nama Lengkap</h5>
                    <input type="text" placeholder="ECO Friends" class="form-control @error('name') is-invalid @enderror"
                        id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">NIM</h5>
                    <input type="text" placeholder="00000012345" class="form-control @error('nim') is-invalid @enderror"
                        id="nim" name="nim" value="{{ old('nim') }}">
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Email Student</h5>
                    <input type="email" placeholder="email@student.umn.ac.id"
                        class="form-control @error('email-student') is-invalid @enderror" id="email-student"
                        name="email-student" value="{{ old('email-student') }}">
                    @error('email-student')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Angkatan</h5>
                    <div class="input-group">
                        <select class="form-select" id="angkatan" name="angkatan">
                            <option @if (old('angkatan') != '2020') selected @endif value="2020">2020</option>
                            <option @if (old('angkatan') === '2021') selected @endif value="2021">2021</option>
                            <option @if (old('angkatan') === '2022') selected @endif value="2022">2022</option>
                            <option @if (old('angkatan') === '2023') selected @endif value="2023">2023</option>
                        </select>
                    </div>
                    <h5 class="mt-3">Fakultas</h5>
                    <div class="input-group">
                        <select class="form-select" id="fakultas" name="fakultas">
                            <option @if (old('fakultas') != 'Teknik dan Informatika') selected @endif value="Teknik dan Informatika">Teknik
                                dan
                                Informatika</option>
                            <option @if (old('fakultas') === 'Bisnis') selected @endif value="Bisnis">Bisnis</option>
                            <option @if (old('fakultas') === 'Ilmu Komunikasi') selected @endif value="Ilmu Komunikasi">Ilmu
                                Komunikasi
                            </option>
                            <option @if (old('fakultas') === 'Seni dan Desain') selected @endif value="Seni dan Desain">Seni dan
                                Desain
                            </option>
                        </select>
                    </div>
                    <h5 class="mt-3">Program Studi</h5>
                    <div class="input-group">
                        <select class="form-select" id="program-studi" name="program-studi">
                            <option @if (old('program-studi') != 'Informatika') selected @endif value="Informatika">Informatika
                            </option>
                            <option @if (old('program-studi') === 'Teknik Komputer') selected @endif value="Teknik Komputer">Teknik
                                Komputer</option>
                            <option @if (old('program-studi') === 'Teknik Elektro') selected @endif value="Teknik Elektro">Teknik
                                Elektro
                            </option>
                            <option @if (old('program-studi') === 'Teknik Fisika') selected @endif value="Teknik Fisika">Teknik Fisika
                            </option>
                            <option @if (old('program-studi') === 'Sistem Informasi') selected @endif value="Sistem Informasi">Sistem
                                Informasi</option>
                            <option @if (old('program-studi') === 'Akuntansi') selected @endif value="Akuntansi">Akuntansi</option>
                            <option @if (old('program-studi') === 'Manajemen') selected @endif value="Manajemen">Manajemen</option>
                            <option @if (old('program-studi') === 'Perhotelan') selected @endif value="Perhotelan">Perohtelan
                            </option>
                            <option @if (old('program-studi') === 'Komunikasi Strategis') selected @endif value="Komunikasi Strategis">
                                Komunikasi Strategis</option>
                            <option @if (old('program-studi') === 'Jurnalistik') selected @endif value="Jurnalistik">Jurnalistik
                            </option>
                            <option @if (old('program-studi') === 'Desain Komunikasi Visual') selected @endif value="Desain Komunikasi Visual">
                                Desain Komunikasi Visual</option>
                            <option @if (old('program-studi') === 'Arsitektur') selected @endif value="Arsitektur">Arsitektur
                            </option>
                            <option @if (old('program-studi') === 'Film & Animasi') selected @endif value="Film & Animasi">Film &
                                Animasi</option>
                        </select>
                    </div>
                    <h5 class="mt-3">Instagram</h5>
                    <input type="text" placeholder="umn_eco"
                        class="form-control @error('instagram') is-invalid @enderror" name="instagram"
                        value="{{ old('instagram') }}">
                    @error('instagram')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">ID Line</h5>
                    <input type="text" placeholder="umn_eco" class="form-control @error('id-line') is-invalid @enderror"
                        name="id-line" value="{{ old('id-line') }}">
                    @error('id-line')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Password</h5>
                    <input type="password" placeholder="Password"
                        class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                        value="{{ old('password') }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Confirmation Password</h5>
                    <input type="password" placeholder="Password"
                        class="form-control @error('confirmation-password') is-invalid @enderror"
                        id="confirmation-password" name="confirmation-password" value="{{ old('confirmation-password') }}">
                    @error('confirmation-password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                    <div class="register-button-container">
                        <button id="button-daftar" type="submit">
                            Daftar
                        </button>
                    </div>

                    <p>Already have an account? <a id="login-link" href="/login">Login</a></p>
                </form>
            </div>
        </div>
    </div>

    @include('cms.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
    <script src="{{ asset('js/cms/page/jquery.validate.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{ asset('js/cms/page/event/registrationUser.js') }}"></script>

    <script>
        var nim_list = [
            @foreach ($ecofriends as $e)
                '{{ $e->nim }}',
            @endforeach
        ];
        var email_list = [
            @foreach ($ecofriends as $e)
                '{{ $e->email }}',
            @endforeach
        ];
        var instagram_list = [
            @foreach ($ecofriends as $e)
                '{{ $e->instagram }}',
            @endforeach
        ];
        var line_list = [
            @foreach ($ecofriends as $e)
                '{{ $e->line }}',
            @endforeach
        ];

        $("#button-daftar").on("click",
            function(e) {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Perhatian!',
                    text: "Halo Eco Friends! Sebelum menekan tombol 'OK' mohon cek kembali data yang telah kalian masukan.",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cek lagi'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-register').submit();
                    }
                });
            });
    </script>
@endsection

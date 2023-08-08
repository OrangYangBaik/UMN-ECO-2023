@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/oprecForm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/registration.css') }}">
@endsection


@section('content')
    <script>
        var student_id_list = [
            @foreach ($ecofriends as $e)
                '{{ $e->student_id }}',
            @endforeach
        ]
        var email_list = [
            @foreach ($ecofriends as $e)
                '{{ $e->email }}',
            @endforeach
        ]
        var instagram_list = [
            @foreach ($ecofriends as $e)
                '{{ $e->instagram_account }}',
            @endforeach
        ]
        var line_list = [
            @foreach ($ecofriends as $e)
                '{{ $e->line_id }}',
            @endforeach
        ]
        var phone_list = [
            @foreach ($ecofriends as $e)
                '{{ $e->phone_number }}',
            @endforeach
        ]
    </script>
    @if ($errors->any())
        <script>
            window.onload = function() {
                Swal.fire("Mohon periksa kembali data yang di input", "Data yang di input tidak valid", "error");
                $('.step-1').removeClass('active');
                $('.step-2').addClass('active');
                $('.form-internal').hide();
                $('.form').hide();
                if (old('is_internal')) {
                    $('.form-internal').show();
                    $('$is_internal').val("1");
                } else if (!old('is_internal')) {
                    $('.form-external').show();
                    $('$is_internal').val("0");
                }
            }
        </script>
    @endif
    <div class="row main-container container m-auto pt-2">
        <img src="{{ asset('images/oprec2/bg/' . $team->name . '.png') }}" class="asset-images artboard-bg" alt=""
            id="{{ $team->name }}">
        <div class="col-12 m-auto pt-5 text-center">
            <img class="logo-division" width="10%" src="{{ asset('images/oprec2/logo/' . $team->name . '.png') }}"
                alt="">

        </div>
    </div>
    <div class="row form-regis container m-auto">

        <div class="col-md-8 m-auto">
            <form action="/recruitmentForm" method="POST" id="form-register" style="width:80%; margin:auto">
                @csrf
                {{-- Form Biodata --}}
                <input type="hidden" value="{{ $team->name }}" class="form-control" name="Team">
                @if ($team->subdivisi)
                    <input type="hidden" value="{{ $team->subdivisi }}" class="form-control" name="Subdivisi">
                @endif

                <div class="recruitment-form-page-1">
                    <h5 class="mt-3">Nama Lengkap </h5><input type="text" placeholder="ECO Family"
                        class="form-control @error('Name') is-invalid @enderror" id="Name" name="Name"
                        value="{{ old('Name') }}">
                    @error('Name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Email Student </h5><input type="email" placeholder="Email@student.umn.ac.id"
                        class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email"
                        value="{{ old('Email') }}">
                    @error('Email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">NIM </h5><input type="text" placeholder="00000012345"
                        class="form-control @error('NIM') is-invalid @enderror" id="NIM" name="NIM"
                        value="{{ old('NIM') }}">
                    @error('NIM')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Jurusan </h5>
                    <div class="input-group">
                        <select class="form-select" id="inputGroupSelect01" name="Jurusan">
                            <option @if (old('Jurusan') != 'Informatika') selected @endif value="Informatika">Informatika
                            </option>
                            <option @if (old('Jurusan') === 'Teknik Komputer') selected @endif value="Teknik Komputer">Teknik
                                Komputer</option>
                            <option @if (old('Jurusan') === 'Teknik Elektro') selected @endif value="Teknik Elektro">Teknik Elektro
                            </option>
                            <option @if (old('Jurusan') === 'Teknik Fisika') selected @endif value="Teknik Fisika">Teknik Fisika
                            </option>
                            <option @if (old('Jurusan') === 'Sistem Informasi') selected @endif value="Sistem Informasi">Sistem
                                Informasi</option>
                            <option @if (old('Jurusan') === 'Akuntansi') selected @endif value="Akuntansi">Akuntansi</option>
                            <option @if (old('Jurusan') === 'Manajemen') selected @endif value="Manajemen">Manajemen</option>
                            <option @if (old('Jurusan') === 'Perhotelan') selected @endif value="Perhotelan">Perohtelan
                            </option>
                            <option @if (old('Jurusan') === 'Komunikasi Strategis') selected @endif value="Komunikasi Strategis">
                                Komunikasi Strategis</option>
                            <option @if (old('Jurusan') === 'Jurnalistik') selected @endif value="Jurnalistik">Jurnalistik
                            </option>
                            <option @if (old('Jurusan') === 'Desain Komunikasi Visual') selected @endif value="Desain Komunikasi Visual">
                                Desain Komunikasi Visual</option>
                            <option @if (old('Jurusan') === 'Arsitektur') selected @endif value="Arsitektur">Arsitektur
                            </option>
                            <option @if (old('Jurusan') === 'Film & Animasi') selected @endif value="Film & Animasi">Film &
                                Animasi</option>
                        </select>
                    </div>
                    <h5 class="mt-3">Angkatan</h5>
                    <div class="input-group">
                        <select class="form-select" id="inputGroupSelect01" name="Angkatan">
                            <option @if (old('Angkatan') != '2020') selected @endif value="2020">2020</option>
                            <option @if (old('Angkatan') === '2021') selected @endif value="2021">2021</option>
                            <option @if (old('Angkatan') === '2022') selected @endif value="2022">2022</option>
                        </select>
                    </div>
                    <h5 class="mt-3">Username Instagram</h5><input type="text" placeholder="umn_eco"
                        class="form-control @error('Instagram_account') is-invalid @enderror" name="Instagram_account"
                        value="{{ old('Instagram_account') }}">
                    @error('Instagram_account')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">ID Line</h5><input type="text" placeholder="umn_eco"
                        class="form-control @error('Line_id') is-invalid @enderror" name="Line_id"
                        value="{{ old('Line_id') }}">
                    @error('Line_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Nomor Telepon</h5><input type="text" placeholder="08123456789"
                        class="form-control @error('Phone_number') is-invalid @enderror" name="Phone_number"
                        value="{{ old('Phone_number') }}">
                    @error('Phone_number')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Form General --}}
                <div class="recruitment-form-page-2" hidden>
                    <h5 class="mt-3">Apa yang kamu ketahui tentang UMN ECO?</h5>
                    <textarea class="form-control @error('Pengetahuan') is-invalid @enderror" name="Pengetahuan" rows="3"
                        placeholder="UMN ECO adalah ...">{{ old('Pengetahuan') }}</textarea>
                    @error('Pengetahuan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Apa kesibukanmu saat ini?</h5>
                    <textarea class="form-control @error('Kesibukan') is-invalid @enderror" name="Kesibukan" rows="3"
                        placeholder="Menjadi asisten laboratorium, ikut panitia UFEST, etc.">{{ old('Kesibukan') }}</textarea>
                    @error('Kesibukan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Sebutkan pengalaman organisasi atau kepanitiaanmu!</h5>
                    <textarea class="form-control @error('Experience') is-invalid @enderror" name="Experience" rows="3"
                        placeholder="UMN ECO 2023">{{ old('Experience') }}</textarea>
                    @error('Experience')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Apa alasanmu memilih {{ $team->name }} @if ($team->subdivisi)
                            {{ $team->subdivisi }}
                        @endif?</h5>
                    <textarea class="form-control @error('Alasan1') is-invalid @enderror" name="Alasan1" rows="3"
                        placeholder="Ingin meningkatkan skill saya dalam hal public speaking">{{ old('Alasan1') }}</textarea>
                    @error('Alasan1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Tuliskan divisi alternatif yang ingin kamu masuki!</h5>
                    <div class="input-group">
                        <select class="form-select" id="inputGroupSelect01" name="Alternative">
                            @if ($team->name != 'ANTA')
                                <option @if (old('Alternative') != 'ANTA') selected @endif value="ANTA">ANTA</option>
                            @endif
                            @if ($team->name != 'GANTAR')
                                <option @if (old('Alternative') === 'GANTAR') selected @endif value="GANTAR">GANTAR</option>
                            @endif
                            @if ($team->subdivisi != 'Media Partner')
                                <option @if (old('Alternative') === 'LIKU - Media Partner') selected @endif value="LIKU - Media Partner">
                                    LIKU - Media Partner</option>
                            @endif
                            @if ($team->subdivisi != 'Sponsorship')
                                <option @if (old('Alternative') === 'LIKU - Sponsorship') selected @endif value="LIKU - Sponsorship">LIKU
                                    - Sponsorship</option>
                            @endif
                            @if ($team->name != 'LUA')
                                <option @if (old('Alternative') === 'LUA') selected @endif value="LUA">LUA</option>
                            @endif
                            @if ($team->name != 'LAWANG')
                                <option @if (old('Alternative') === 'LAWANG') selected @endif value="LAWANG">LAWANG</option>
                            @endif
                            @if ($team->name != 'ORTA')
                                <option @if (old('Alternative') === 'ORTA') selected @endif value="ORTA">ORTA</option>
                            @endif
                            @if ($team->name != 'ARTO')
                                <option @if (old('Alternative') === 'ARTO') selected @endif value="ARTO">ARTO</option>
                            @endif
                            @if ($team->subdivisi != 'Public Relation')
                                <option @if (old('Alternative') === 'GENTA - Public Relation') selected @endif
                                    value="GENTA - Public Relation">GENTA - Public Relation</option>
                            @endif
                            @if ($team->subdivisi != 'Visual')
                                <option @if (old('Alternative') === 'GENTA - Visual') selected @endif value="GENTA - Visual">GENTA -
                                    Visual</option>
                            @endif
                            @if ($team->subdivisi != 'Foto')
                                <option @if (old('Alternative') === 'BACARITA - Foto') selected @endif value="BACARITA - Foto">
                                    BACARITA - Foto</option>
                            @endif
                            @if ($team->subdivisi != 'Video')
                                <option @if (old('Alternative') === 'BACARITA - Video') selected @endif value="BACARITA - Video">
                                    BACARITA - Video</option>
                            @endif
                            @if ($team->name != 'GERHA')
                                <option @if (old('Alternative') === 'GERHA') selected @endif value="GERHA">GERHA</option>
                            @endif
                        </select>
                    </div>
                    <h5 class="mt-3">Apa alasanmu memilih divisi alternatif tersebut?</h5>
                    <textarea class="form-control @error('Alasan2') is-invalid @enderror" name="Alasan2" rows="3"
                        placeholder="Pernah menjadi anggota divisi tersebut di kepanitiaan lain">{{ old('Alasan2') }}</textarea>
                    @error('Alasan2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if ($team->name === 'BACARITA')
                        <h5 class="mt-3">Apakah kamu memiliki pengalaman dalam editing baik video ataupun foto? Jika ya,
                            jelaskan Editing Software yang digunakan dan dikuasai!</h5>
                        <textarea class="form-control @error('Pengalaman_dokum') is-invalid @enderror" name="Pengalaman_dokum"
                            rows="3" placeholder="Ya, saya pernah menggunakan ...">{{ old('Pengalaman_dokum') }}</textarea>
                        @error('Pengalaman_dokum')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @endif
                    @if ($team->name === 'ORTA' || ($team->name === 'GENTA' && $team->subdivisi === 'Visual') || $team->name === 'BACARITA')
                        <h5 class="mt-3">Link Google Drive pengumpulan CV (Additional), Portofolio, dan Screenshoot IPK
                        </h5>
                        <input type="text" placeholder="https://drive.google.com"
                            class="form-control @error('LinkDrive') is-invalid @enderror" name="LinkDrive"
                            value="{{ old('LinkDrive') }}">
                        @error('LinkDrive')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @else
                        <h5 class="mt-3">Link Google Drive pengumpulan CV (Additional) dan Screenshoot IPK</h5>
                        <input type="text" placeholder="https://drive.google.com"
                            class="form-control @error('LinkDrive') is-invalid @enderror" name="LinkDrive"
                            value="{{ old('LinkDrive') }}">
                        @error('LinkDrive')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @endif
                </div>

                <br>

                <div class="row justify-content-end recruitment-button-page-1 m-auto">
                    <div class="col-12 d-flex justify-content-end button-next p-0">
                        <button type="button" class="mb-4">Next</button>
                    </div>
                </div>

                <div class="row justify-content-end recruitment-button-page-2 m-auto" hidden>
                    <div class="col-12 d-flex justify-content-end button-reg p-0;">
                        <button type="button" class="button-back mx-3 mb-4">Back</button>
                        <button type="button" class="button-submit mb-4">Register</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    @include('cms.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
    <script src="{{ asset('js/cms/page/jquery.validate.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{ asset('js/cms/page/registration.js') }}"></script>

    <script>
        $(".button-submit").on("click",
            function(e) {
                // e.preventDefault();
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

        $(".button-next button").on("click", function(e) {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            $(".recruitment-form-page-1").attr("hidden", true);
            $(".recruitment-form-page-2").removeAttr("hidden");
            $(".recruitment-button-page-1").attr("hidden", true);
            $(".recruitment-button-page-2").removeAttr("hidden");
        })

        $(".button-back").on("click", function(e) {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            $(".recruitment-form-page-2").attr("hidden", true);
            $(".recruitment-form-page-1").removeAttr("hidden");
            $(".recruitment-button-page-2").attr("hidden", true);
            $(".recruitment-button-page-1").removeAttr("hidden");
        })
    </script>
@endsection

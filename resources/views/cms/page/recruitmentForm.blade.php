@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/oprecForm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/registration.css') }}">
@endsection


@section('content')
  <script>
    var student_id_list = [
        @foreach($ecofriends as $e)
        '{{ $e->student_id }}',
        @endforeach
    ]
    var email_list = [
        @foreach($ecofriends as $e)
        '{{ $e->email }}',
        @endforeach
    ]
    var instagram_list = [
        @foreach($ecofriends as $e)
        '{{ $e->instagram_account }}',
        @endforeach
    ]
    var line_list = [
        @foreach($ecofriends as $e)
        '{{ $e->line_id }}',
        @endforeach
    ]
    var phone_list = [
        @foreach($ecofriends as $e)
        '{{ $e->phone_number }}',
        @endforeach
    ]
</script>
@if ($errors->any())
<script>
    window.onload = function(){
        Swal.fire("Mohon periksa kembali data yang di input", "Data yang di input tidak valid", "error");
        $('.step-1').removeClass('active');
        $('.step-2').addClass('active');
        $('.form-internal').hide();
        $('.form').hide();
        if(old('is_internal')){
            $('.form-internal').show();
            $('$is_internal').val("1");
        }else if(!old('is_internal')){
            $('.form-external').show();
            $('$is_internal').val("0");
        }
    }
</script>
@endif
<div class="row main-container pt-2 container m-auto">
  <img src="{{ asset('images/oprec2/bg/'.$team->name.'.png') }}" class="asset-images artboard-bg " alt="" id="{{ $team->name }}">
    <div class="col-12 text-center m-auto pt-5">
      <img class="logo-division" width="10%" src="{{ asset('images/oprec2/logo/'.$team->name.'.png') }}" alt="">

    </div>
</div>
<div class="row form-regis  m-auto container">
  
    <div class="col-md-8 m-auto" >
        <form  action="/recruitmentForm" method="POST" id="form-register" style="width:80%; margin:auto">
            @csrf
            {{-- Form Biodata --}}
            <input type="hidden" value="{{ $team->name }}" class="form-control" name="Team">
            @if($team->subdivisi)
              <input type="hidden" value="{{ $team->subdivisi }}" class="form-control" name="Subdivisi">
            @endif

            <div class="recruitment-form-page-1">
              <h5 class="mt-3">Nama Lengkap </h5><input type="text" placeholder="ECO Family" class="form-control @error('Name') is-invalid @enderror" id="Name" name="Name" value="{{ old('Name') }}">
              @error('Name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Email Student </h5><input type="email" placeholder="Email@student.umn.ac.id" class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email" value="{{ old('Email') }}">
              @error('Email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">NIM </h5><input type="text" placeholder="00000012345" class="form-control @error('NIM') is-invalid @enderror" id="NIM" name="NIM" value="{{ old('NIM') }}">
              @error('NIM')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Jurusan </h5>
              <div class="input-group">
                  <select class="form-select" id="inputGroupSelect01" name="Jurusan">
                    <option @if(old('Jurusan') != 'Informatika') selected @endif value="Informatika">Informatika</option>
                    <option @if(old('Jurusan') === "Teknik Komputer") selected @endif value="Teknik Komputer">Teknik Komputer</option>
                    <option @if(old('Jurusan') === "Teknik Elektro") selected @endif value="Teknik Elektro">Teknik Elektro</option>
                    <option @if(old('Jurusan') === "Teknik Fisika") selected @endif value="Teknik Fisika">Teknik Fisika</option>
                    <option @if(old('Jurusan') === "Sistem Informasi") selected @endif value="Sistem Informasi">Sistem Informasi</option>
                    <option @if(old('Jurusan') === "Akuntansi") selected @endif value="Akuntansi">Akuntansi</option>
                    <option @if(old('Jurusan') === "Manajemen") selected @endif value="Manajemen">Manajemen</option>
                    <option @if(old('Jurusan') === "Perhotelan") selected @endif value="Perhotelan">Perohtelan</option>
                    <option @if(old('Jurusan') === "Komunikasi Strategis") selected @endif value="Komunikasi Strategis">Komunikasi Strategis</option>
                    <option @if(old('Jurusan') === "Jurnalistik") selected @endif value="Jurnalistik">Jurnalistik</option>
                    <option @if(old('Jurusan') === "Desain Komunikasi Visual") selected @endif value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option @if(old('Jurusan') === "Arsitektur") selected @endif value="Arsitektur">Arsitektur</option>
                    <option @if(old('Jurusan') === "Film & Animasi") selected @endif value="Film & Animasi">Film & Animasi</option>
                  </select>
              </div>
              <h5 class="mt-3">Angkatan </h5><div class="input-group">
                  <select class="form-select" id="inputGroupSelect01" name="Angkatan">
                    <option @if(old('Angkatan') != "2020") selected @endif value="2020">2020</option>
                    <option @if(old('Angkatan') === "2021") selected @endif value="2021">2021</option>
                    <option @if(old('Angkatan') === "2022") selected @endif value="2022">2022</option>
                  </select>
                </div>
              {{-- <h5 class="mt-3">Tempat Lahir</h5><input type="text" placeholder="Tangerang" class="form-control @error('Tempat_lahir') is-invalid @enderror" name="Tempat_lahir" value="{{ old('Tempat_lahir') }}">
              @error('Tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Tanggal Lahir</h5><input type="date" placeholder="01/01/2022" class="form-control @error('Tanggal_lahir') is-invalid @enderror" name="Tanggal_lahir" value="{{ old('Tanggal_lahir') }}">
              @error('Tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror --}}
              <h5 class="mt-3">Username Instagram</h5><input type="text" placeholder="umn_eco" class="form-control @error('Instagram_account') is-invalid @enderror" name="Instagram_account" value="{{ old('Instagram_account') }}">
              @error('Instagram_account')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">ID Line</h5><input type="text" placeholder="umn_eco" class="form-control @error('Line_id') is-invalid @enderror" name="Line_id" value="{{ old('Line_id') }}">
              @error('Line_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Nomor Telepon</h5><input type="text" placeholder="08123456789" class="form-control @error('Phone_number') is-invalid @enderror" name="Phone_number" value="{{ old('Phone_number') }}">
              @error('Phone_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              {{-- <div class="mt-3">
                <h5 class="form-label">Foto 3x4</h5>
                <input class="form-control @error('Image') is-invalid @enderror" type="file" id="Image" name="Image">
                @error('Image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              </div> --}}
            </div>
            
            {{-- Form General --}}
            <div class="recruitment-form-page-2" hidden>
              <h5 class="mt-3">Apa yang kamu ketahui tentang UMN ECO?</h5>
              <textarea class="form-control @error('Pengetahuan') is-invalid @enderror" name="Pengetahuan" rows="3" placeholder="UMN ECO adalah ...">{{ old('Pengetahuan') }}</textarea>
              @error('Pengetahuan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Apa kesibukanmu saat ini?</h5>
              <textarea class="form-control @error('Kesibukan') is-invalid @enderror" name="Kesibukan" rows="3" placeholder="Menjadi asisten laboratorium, ikut panitia UFEST, etc.">{{ old('Kesibukan') }}</textarea>
              @error('Kesibukan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Sebutkan pengalaman organisasi atau kepanitiaanmu!</h5>
              <textarea class="form-control @error('Experience') is-invalid @enderror" name="Experience" rows="3" placeholder="UMN ECO 2023">{{ old('Experience') }}</textarea>
              @error('Experience')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Apa alasanmu memilih {{ $team->name }} @if($team->subdivisi) {{$team->subdivisi}} @endif?</h5>
              <textarea class="form-control @error('Alasan1') is-invalid @enderror" name="Alasan1" rows="3" placeholder="Ingin meningkatkan skill saya dalam hal public speaking">{{ old('Alasan1') }}</textarea>
              @error('Alasan1')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Tuliskan divisi alternatif yang ingin kamu masuki!</h5>
              <div class="input-group">
                  <select class="form-select" id="inputGroupSelect01" name="Alternative">
                    @if($team->name != 'ANTA') <option @if(old('Alternative') != 'ANTA') selected @endif value="ANTA">ANTA</option> @endif
                    @if($team->name != 'GANTAR') <option @if(old('Alternative') === "GANTAR") selected @endif value="GANTAR">GANTAR</option> @endif
                    @if($team->subdivisi != 'Media Partner') <option @if(old('Alternative') === "LIKU - Media Partner") selected @endif value="LIKU - Media Partner">LIKU - Media Partner</option> @endif
                    @if($team->subdivisi != 'Sponsorship') <option @if(old('Alternative') === "LIKU - Sponsorship") selected @endif value="LIKU - Sponsorship">LIKU - Sponsorship</option> @endif
                    @if($team->name != 'LUA') <option @if(old('Alternative') === "LUA") selected @endif value="LUA">LUA</option> @endif
                    @if($team->name != 'LAWANG') <option @if(old('Alternative') === "LAWANG") selected @endif value="LAWANG">LAWANG</option> @endif
                    @if($team->name != 'ORTA') <option @if(old('Alternative') === "ORTA") selected @endif value="ORTA">ORTA</option> @endif
                    @if($team->name != 'ARTO') <option @if(old('Alternative') === "ARTO") selected @endif value="ARTO">ARTO</option> @endif
                    @if($team->subdivisi != 'Public Relation') <option @if(old('Alternative') === "GENTA - Public Relation") selected @endif value="GENTA - Public Relation">GENTA - Public Relation</option> @endif
                    @if($team->subdivisi != 'Visual') <option @if(old('Alternative') === "GENTA - Visual") selected @endif value="GENTA - Visual">GENTA - Visual</option> @endif
                    @if($team->subdivisi != 'Foto') <option @if(old('Alternative') === "BACARITA - Foto") selected @endif value="BACARITA - Foto">BACARITA - Foto</option> @endif
                    @if($team->subdivisi != 'Video') <option @if(old('Alternative') === "BACARITA - Video") selected @endif value="BACARITA - Video">BACARITA - Video</option> @endif
                    @if($team->name != 'GERHA') <option @if(old('Alternative') === "GERHA") selected @endif value="GERHA">GERHA</option> @endif
                  </select>
              </div>
              <h5 class="mt-3">Apa alasanmu memilih divisi alternatif tersebut?</h5>
              <textarea class="form-control @error('Alasan2') is-invalid @enderror" name="Alasan2" rows="3" placeholder="Pernah menjadi anggota divisi tersebut di kepanitiaan lain">{{ old('Alasan2') }}</textarea>
              @error('Alasan2')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              @if($team->name === 'BACARITA')
              <h5 class="mt-3">Apakah kamu memiliki pengalaman dalam editing baik video ataupun foto? Jika ya, jelaskan Editing Software yang digunakan dan dikuasai!</h5>
              <textarea class="form-control @error('Pengalaman_dokum') is-invalid @enderror" name="Pengalaman_dokum" rows="3" placeholder="Ya, saya pernah menggunakan ...">{{ old('Pengalaman_dokum') }}</textarea>
              @error('Pengalaman_dokum')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              @endif
              @if($team->name === "ORTA" ||  ($team->name === "GENTA" && $team->subdivisi === "Visual") || $team->name === "BACARITA")
              <h5 class="mt-3">Link Google Drive pengumpulan CV (Additional), Portofolio, dan Screenshoot IPK</h5>
              <input type="text" placeholder="https://drive.google.com" class="form-control @error('LinkDrive') is-invalid @enderror" name="LinkDrive" value="{{ old('LinkDrive') }}">
              @error('LinkDrive')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              @else
              <h5 class="mt-3">Link Google Drive pengumpulan CV (Additional) dan Screenshoot IPK</h5>
              <input type="text" placeholder="https://drive.google.com" class="form-control @error('LinkDrive') is-invalid @enderror" name="LinkDrive" value="{{ old('LinkDrive') }}">
              @error('LinkDrive')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              @endif
              {{-- <h5 class="mt-3">Sebutkan tiga kelebihan Anda!</h5>
                <input type="text" placeholder="Jujur, Suka Bersosialisasi, Aktif Bertanya" class="form-control @error('Kelebihan') is-invalid @enderror" name="Kelebihan" value="{{ old('Kelebihan') }}">
              @error('Kelebihan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Sebutkan tiga kekurangan Anda</h5>
                <input type="text" placeholder="Pelit, Ceroboh, Tidak disiplin" class="form-control @error('Kekurangan') is-invalid @enderror" name="Kekurangan" value="{{ old('Kekurangan') }}">
              @error('Kekurangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Pengalaman organisasi dan kepanitiaan selama tiga tahun terakhir?</h5>
                <textarea class="form-control @error('Experience') is-invalid @enderror" name="Experience" rows="3" placeholder="UMN ECO 2022">{{ old('Experience') }}</textarea>
              @error('Experience')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Apa yang Anda ketahui tentang UMN ECO?</h5>
                <textarea placeholder="UMN ECO adalah..." class="form-control @error('What') is-invalid @enderror" name="What" rows="3">{{ old('What') }}</textarea>
              @error('What')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Mengapa Anda memilih untuk mendaftar ke tim {{ $team->name }}?</h5>
                <textarea placeholder="Karena saya pandai dalam bidang ini" class="form-control @error('Why') is-invalid @enderror" name="Why" rows="3">{{ old('Why') }}</textarea>
              @error('Why')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <h5 class="mt-3">Seberapa paham Anda dengan Jobdesc dari tim yang Anda pilih</h5>
                <textarea placeholder="Sangat Paham" class="form-control @error('Paham_jobdesc') is-invalid @enderror" name="Paham_jobdesc" rows="3">{{ old('Paham_jobdesc') }}</textarea>
              @error('Paham_jobdesc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror --}}
  
              {{-- Pertanyaan per tim --}}
              {{-- @switch($team->name)
                @case('LAWANG')
                  <h5 class="mt-3">Dalam skala 1-10 seberapa ahli Anda dalam mengoperasikan excel dan sheets? Berikan alasan Anda.</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                  @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <h5 class="mt-3">Sikap apa saja yang perlu dimiliki dalam berkontribusi sebagai Tim Lawang UMN ECO 2022?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2" rows="3">{{ old('Question2') }}</textarea>
                  @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  @break
                @case('ARTO')
                  <h5 class="mt-3">Jika Anda sebagai panitia Tim Arto lupa atau tidak teliti dalam memposting PP, Apa yang akan Anda lakukan?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                  @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <h5 class="mt-3">Dari skala 1-10 seberapa ahli Anda dalam menggunakan Microsoft Excel atau Google Sheet?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2" rows="3">{{ old('Question2') }}</textarea>
                  @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  <h5 class="mt-3">Jelaskan satu ide yang Anda tawarkan untuk Tim Arto dalam menghasilkan dana selain paid promote ataupun jasa isi kuesioner!</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question3') is-invalid @enderror" name="Question3" rows="3">{{ old('Question3') }}</textarea>
                  @error('Question3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  @break
                @case('BACARITA')
                  @if($team->subdivisi == "Foto")
                    <h5 class="mt-3">Software apa saja yang dikuasai untuk melakukan proses editing foto?</h5>
                      <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                  @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                    <h5 class="mt-3">Pengalaman dokumentasi acara offline dan online apa saja yang pernah diikuti? Sertakan portofolio dengan upload ke google drive dan lampirkan link google drive anda dibawah (minimal 5 foto untuk masing-masing acara baik online maupun offline)</h5>
                      <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2" rows="3">{{ old('Question2') }}</textarea>
                    @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  @else
                    <h5 class="mt-3">Aplikasi apa yang biasa Anda digunakan untuk menyunting? (Contoh: Adobe premiere, photoshop, After Effect.) </h5>
                      <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                    @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                    <h5 class="mt-3">Peralatan apa saja yang Anda miliki? (Contoh: cam, lighting, sound, dll.) </h5>
                      <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2"  rows="3">{{ old('Question2') }}</textarea>
                    @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                    <h5 class="mt-3">Sebutkan pengalaman dokumentasi Anda sebelumnya!</h5>
                      <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question3') is-invalid @enderror" name="Question3" rows="3">{{ old('Question3') }}</textarea>
                    @error('Question3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  @endif
                  @break
                @case('LIKU')
                @if($team->subdivisi == "Sponsorship")
                  <h5 class="mt-3">Apa yang Anda ketahui mengenai tim yang bekerja di bidang sponsorship?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                  @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <h5 class="mt-3">Apakah Anda mempunyai kenalan organisasi/perusahaan untuk mensponsori UMN ECO 2022? Apakah Anda bersedia mengapproach mereka untuk dijadikan sponsor?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2" rows="3">{{ old('Question2') }}</textarea>
                  @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                @else
                  <h5 class="mt-3">Menurut Anda skills apa saja yang harus dimiliki untuk bergabung dalam Tim LIKU (Media Relations) ?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                  @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <h5 class="mt-3">Menurut Anda bagaimana cara meng-approach media-media untuk bekerja sama dengan UMN ECO 2022? Media-media apa saja yang menurut Anda layak bekerja sama dengan UMN ECO 2022?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2"  rows="3">{{ old('Question2') }}</textarea>
                  @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
              @endif
              @break
                @case('ANTA')
                  <h5 class="mt-3">Sebutkan ide atau tema untuk kegiatan yang ingin Anda realisasikan di UMN ECO 2022 2022 (Contoh: food waste, plastic waste, etc.) (Diperbolehkan memberi penjelasan singkat mengenai tema tersebut)</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                  @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  @break
                @case('LUA')
                  <h5 class="mt-3">Jelaskan secara singkat seberapa jauh Anda mengenal ZOOM, dan sebutkan fitur-fitur yang ada didalamnya!</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                  @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <h5 class="mt-3">Saat menjalankan tugas, Anda diharuskan untuk menggunakan laptop untuk mengoperasikan ZOOM dan gawai digunakan untuk keperluan jalur komunikasi yang menyebabkan gawai tidak dapat membuka aplikasi lain selain jalur komunikasi. Di hari dan jam yang sama Anda memiliki keperluan atau jadwal lain seperti kelas yang mengharuskan Anda untuk menggunakan aplikasi ZOOM, Jelaskan apa yang akan Anda lakukan?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2"  rows="3">{{ old('Question2') }}</textarea>
                  @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  @break
                @case('ORTA')
                  <h5 class="mt-3">Sebutkan bahasa pemrograman yang Anda ketahui!</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                  @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <h5 class="mt-3">Apakah Anda pernah ikut berkontribusi dalam pembuatan suatu website? Jelaskan prosesnya.</h5>
                  <small>Jika tidak pernah, jelaskan secara rinci tahapan dalam membuat suatu website.</small>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2"  rows="3">{{ old('Question2') }}</textarea>
                  @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  @break
                @case('GANTAR')
                  <h5 class="mt-3">Jika Anda melanggar peraturan dan tata tertib yang sudah ditetapkan, maka apa bentuk pertanggungjawaban Anda?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                  @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <h5 class="mt-3">Ekspektasi dan kontribusi apa yang bisa Anda berikan jika menjadi bagian dari Tim Gantar?</h5>
                    <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2"  rows="3">{{ old('Question2') }}</textarea>
                  @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  @break
                @case('GENTA')
                  @if($team->subdivisi == "Visual")
                    <h5 class="mt-3">Upload portfolio Anda ke google drive kemudian sertakan link google drive anda dibawah dan jelaskan alasan dibalik portfolio milik Anda dari segi konsep dan teknis.</h5>
                      <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                    @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                    <h5 class="mt-3">Apakah Anda terbiasa membuat ilustrasi vektor, 3d, atau mograph? Software apa yang biasa lakukan untuk hal tersebut?</h5>
                      <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2"  rows="3">{{ old('Question2') }}</textarea>
                    @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  @else
                    <h5 class="mt-3">Buatlah dua rancangan konten Tiktok untuk UMN ECO 2022 (Boleh melampirkan referensinya) beserta caption dan hastag yang menarik.</h5>
                      <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question1') is-invalid @enderror" name="Question1" rows="3">{{ old('Question1') }}</textarea>
                    @error('Question1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                    <h5 class="mt-3">Jika nantinya UMN ECO 2022 membuat suatu acara yang bertema “Save the Electricity”, buatlah suatu caption untuk memperkenalkan dan mendukung poster acara tersebut dengan semenarik mungkin.</h5>
                      <textarea placeholder="Masukkan jawabanmu disini..." class="form-control @error('Question2') is-invalid @enderror" name="Question2"  rows="3">{{ old('Question2') }}</textarea>
                    @error('Question2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  @endif
                  @break
              @endswitch --}}
            </div>
            
            <br>
            
            <div class="row justify-content-end m-auto recruitment-button-page-1">
              <div class="col-12 d-flex justify-content-end button-next p-0">
                <button type="button" class="mb-4">Next</button>
              </div>
            </div>

            <div class="row justify-content-end m-auto recruitment-button-page-2" hidden>
              <div class="col-12 d-flex justify-content-end button-reg p-0;">
                <button type="button" class="mb-4 mx-3 button-back">Back</button>
              <button type="button" class="mb-4 button-submit">Register</button>
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

    $(".button-next button").on("click", function(e){
      window.scrollTo({ top: 0, behavior: 'smooth' });
      $(".recruitment-form-page-1").attr("hidden", true);
      $(".recruitment-form-page-2").removeAttr("hidden");
      $(".recruitment-button-page-1").attr("hidden", true);
      $(".recruitment-button-page-2").removeAttr("hidden");
    })

    $(".button-back").on("click", function(e){
      window.scrollTo({ top: 0, behavior: 'smooth' });
      $(".recruitment-form-page-2").attr("hidden", true);
      $(".recruitment-form-page-1").removeAttr("hidden");
      $(".recruitment-button-page-2").attr("hidden", true);
      $(".recruitment-button-page-1").removeAttr("hidden");
    })

    // function checkValid() {
    //     if ($('#form-register').valid()) {
    //         $('#submit-btn').prop('disabled', 'disabled');
    //         $('#form-register').submit();
    //     } else {
    //         $('#submit-btn').prop('disabled', false);
    //     }
    // };

    // $("#next-btn").click(function() {
    //     var checkBox = document.getElementById("regulation");

    //     if (checkBox.checked == true) {
    //         $('.step-1').removeClass('active');
    //         $('.step-2').addClass('active');
    //         // $('.form-external').hide();
    //     } else {
    //         Swal.fire({
    //             text: "Kamu perlu menyetujui ketentuan yang berlaku!",
    //             icon: 'warning',
    //             confirmButtonColor: '#3085d6',
    //             confirmButtonText: 'OK'
    //         })
    //     }
    // });



    // function validateNIM(evt) {
    //     var theEvent = evt || window.event;

    //     // Handle paste
    //     if (theEvent.type === 'paste') {
    //         key = event.clipboardData.getData('text/plain');
    //     } else {
    //         // Handle key press
    //         var key = theEvent.keyCode || theEvent.which;
    //         key = String.fromCharCode(key);
    //     }
    //     var regex = /[0-9]|\./;
    //     if (!regex.test(key)) {
    //         theEvent.returnValue = false;
    //         if (theEvent.preventDefault) theEvent.preventDefault();
    //     }
    // }
</script>
@endsection
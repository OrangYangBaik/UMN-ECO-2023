@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/oprecForm.css') }}">
<link rel="stylesheet" href="{{ asset('css/cms/page/registration.css') }}">
@endsection

@section('content')
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
<div class="row form-regis m-auto container">
    <div class="col-md-8 m-auto" >
        <form  action="/" method="POST" id="form-register" style="width:80%; margin:auto">
            @csrf
            <h5 class="mt-3">Nama Lengkap </h5>
            <input type="text" placeholder="ECO Family" class="form-control @error('Name') is-invalid @enderror" id="Name" name="Name" value="{{ old('Name') }}">
            @error('Name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
            <h5 class="mt-3">Email Student </h5>
            <input type="email" placeholder="Email@student.umn.ac.id" class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email" value="{{ old('Email') }}">
            @error('Email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
            <h5 class="mt-3">NIM </h5>
            <input type="text" placeholder="00000012345" class="form-control @error('NIM') is-invalid @enderror" id="NIM" name="NIM" value="{{ old('NIM') }}">
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
            <h5 class="mt-3">Angkatan </h5>
            <div class="input-group">
                <select class="form-select" id="inputGroupSelect01" name="Angkatan">
                  <option @if(old('Angkatan') != "2019") selected @endif value="2019">2019</option>
                  <option @if(old('Angkatan') === "2020") selected @endif value="2020">2020</option>
                  <option @if(old('Angkatan') === "2021") selected @endif value="2021">2021</option>
                </select>
              </div>
            <h5 class="mt-3">Tempat Lahir</h5>
            <input type="text" placeholder="Tangerang" class="form-control @error('Tempat_lahir') is-invalid @enderror" name="Tempat_lahir" value="{{ old('Tempat_lahir') }}">
            @error('Tempat_lahir')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
            <h5 class="mt-3">Tanggal Lahir</h5>
            <input type="date" placeholder="01/01/2022" class="form-control @error('Tanggal_lahir') is-invalid @enderror" name="Tanggal_lahir" value="{{ old('Tanggal_lahir') }}">
            @error('Tanggal_lahir')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
            <h5 class="mt-3">Username Instagram</h5>
            <input type="text" placeholder="umn_eco" class="form-control @error('Instagram_account') is-invalid @enderror" name="Instagram_account" value="{{ old('Instagram_account') }}">
            @error('Instagram_account')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
            <h5 class="mt-3">ID Line</h5>
            <input type="text" placeholder="umn_eco" class="form-control @error('Line_id') is-invalid @enderror" name="Line_id" value="{{ old('Line_id') }}">
            @error('Line_id')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
            <h5 class="mt-3">Nomor Telepon</h5>
            <input type="text" placeholder="08123456789" class="form-control @error('Phone_number') is-invalid @enderror" name="Phone_number" value="{{ old('Phone_number') }}">
            @error('Phone_number')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
            </div>

            
            {{-- Form General --}}
            <h5 class="mt-3">Sebutkan tiga kelebihan Anda!</h5>
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
            <h5 class="mt-3">Mengapa Anda memilih untuk mendaftar ke tim?</h5>
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
            @enderror

            <br>
            <div class="row justify-content-end m-auto">
              <div class="col-12 d-flex justify-content-end button-reg p-0">
                <button type="button" class="mb-4">Register</button>
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
  $(".button-reg button").on("click",
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
    function checkValid() {
        if ($('#form-register').valid()) {
            $('#submit-btn').prop('disabled', 'disabled');
            $('#form-register').submit();
        } else {
            $('#submit-btn').prop('disabled', false);
        }
    };

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



    function validateNIM(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
            // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
@endsection
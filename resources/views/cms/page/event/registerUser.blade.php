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
<div class="row form-regis  m-auto container">
    <div class="col-md-8 m-auto" >
        <form  action="/registerUser" method="POST" id="form-register" style="width:80%; margin:auto">
            @csrf
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
              <h5 class="mt-3">Password </h5><input type="text" placeholder="ya password" class="form-control @error('Password') is-invalid @enderror" id="Password" name="Password" value="{{ old('Password') }}">
              @error('Password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <button type="submit">daftar</button>
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
</script>
@endsection
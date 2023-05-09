@extends('cms.template.app')

@section('custom-css')
<style>
    .pdfregulasi{
        padding-top: 100px;
        margin-bottom: 50px;
        position: relative;
        z-index: 100;
    }
    .input-margin{
        margin-right: 10px;
    }
    .error{
        color: #ffc0a4;
        font-size: 0.8rem;
    }
    .form-control.error {
        background-color: #ffc0a4;
        border-color: #eb5e28;
    }
    .regulasi{
        width:50vw;
        height:80vh;
        min-width: 400px;
    }
    @media(max-width: 435px){
        .regulasi{
            min-width: 300px;
        }
    }
    body{
        background-color: blueviolet;
        font-family: "Montserrat";
    }
    h1{
        font-family: "Montserrat Bold 2";
        text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.25);
    }

    .overlay-background{
        background: linear-gradient(134.8deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        backdrop-filter: blur(25px);
        border-radius: 50px;
    }
    .button-submit{
        background: #BFDB3B;
        box-shadow: 0px 4px 4px #aab675;
        border-radius: 20px;
        padding: 8px 30px;
        outline: none;
        border: none;
        font-family: "Montserrat Bold";
        text-transform: uppercase;
        color:white;
        transition: 0.2s;
    }

    .button-submit:focus{
        outline: none;
        border: none;
    }

    .button-submit:hover{
        background: #95ac2f;
        transition: 0.2s;
    }
</style>
{{-- <link rel="stylesheet" href="{{ asset('css/cms/page/landingDrought.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/cms/page/landingDrought.css') }}">

@endsection

@section('content')

<div class="main">
<div class="container text-white pdfregulasi">
    <div class=" overlay-background ">

        <h1 class="text-center py-4">Regulasi Umum DROUGHT</h1>
        <iframe class="d-block mx-auto regulasi" src="https://drive.google.com/file/d/19Ttwhi0mgWpWOenxyCGxMkQ6g6X3fTOC/preview" width="640" height="480" allow="autoplay"></iframe>
        {{-- <iframe class="d-block mx-auto regulasi" src="https://drive.google.com/file/d/19Ttwhi0mgWpWOenxyCGxMkQ6g6X3fTOC/view?usp=sharing" frameborder="0" ></iframe> --}}
        <form action="{{ route('regisDrought') }}" method="get" class="my-4" id="regulasi">
            @csrf
            <div class="form-check d-flex justify-content-center">
                <input class="form-check-input input-margin mx-3" type="checkbox" value="" name="check" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Apakah Anda setuju dengan regulasi umum di atas?
                </label>
            </div>
            <div id="errordiv" class="text-center"></div>
    
            <div class="col text-center mx-auto mt-2 mb-4 pb-4">
                <button type="submit" class="btn button-submit">Next</button>
            </div>
        </form>
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
@include('cms.template.footer')
@endsection

@section('custom-js')
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
$('#regulasi').validate({
    rules: {
        check: {
            required: true,
        }
    },
    messages: {
        check: {
            required: '*Klik setuju untuk lanjut ke tahap berikutnya.'
        }
    },
    errorPlacement: function(error, element) {
     error.appendTo('#errordiv');
   }
})
</script>
@endsection
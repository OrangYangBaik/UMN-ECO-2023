@extends('cms.template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/downpourLanding.css') }}">

@endsection
@section('content')
<div class="main position-relative">

    {{-- Section Atas --}}
    <div class="position-relative section-1">
        <h1 class="content-title">DOWNPOUR</h1>
        <img src="{{ asset('images/downpourLanding/wall1.png') }}" class="wall1" alt="" />
        <img src="{{ asset('images/downpourLanding/wall2.png') }}" class="wall2" alt="" />
        <img src="{{ asset('images/downpourLanding/bridges.png') }}" class="bridges" alt="" />
        <!-- <img src="{{ asset('images/downpourLanding/bridge.png') }}" class="bridge2" alt="" /> -->
        <img src="{{ asset('images/downpourLanding/sect1.png') }}" class="background" alt="" />
        <div class="lantai"></div>
    </div>

    <div class="position-relative section-2">
        <img src="{{ asset('images/downpourLanding/sect2.png') }}" class="background2" alt="" />
        <img src="{{ asset('images/downpourLanding/wall3.png') }}" class="wall3" alt="" />
        <!-- <img src="{{ asset('images/downpourLanding/wall3Cropped.png') }}" class="wall3" alt="" /> -->
        <img src="{{ asset('images/downpourLanding/wall4Cropped.png') }}" class="wall4" alt="" />

        <!-- <div class="lantai2"></div> -->
        <div class="content-container">

            <!-- <img src="{{ asset('images/downpourLanding/tiang.png') }}" class="tiang" alt="" /> -->


            <div class="desc1">
                <div class="desc-title">
                    <h2 class="text-large text-center m-auto">The Story Behind DOWNPOUR</h2>
                </div>
                <div class="content-desc mt-4 m-auto">
                    <p>Musim hujan membawa banyak manfaat bagi masyarakat Indonesia, tetapi juga dianggap sebagai ancaman bagi manusia dan lingkungan. Hal ini umumnya karena masalah lingkungan seperti banjir, hujan asam, dan tanah longsor sering terjadi pada musim hujan. Namun, hanya sedikit orang yang sadar bahwa sebagian besar masalah lingkungan yang terjadi saat hujan adalah ulah manusia sendiri.</p>
                    <p>Dengan mengangkat tema <strong><i>Better Human Better Earth</i></strong>, DOWNPOUR berfokus pada tingkah laku manusia sebagai makhluk hidup sehingga apa yang dilakukan manusia tidak hanya menyenangkan dirinya sendiri, tetapi juga mempertimbangkan kelangsungan makhluk hidup lain, lingkungan, serta Bumi.</p>
                </div>
            </div>
            <div class=" desc2 ">
                <div class="desc-title ">
                    <h2 class="text-large text-center m-auto">Things We Do In DOWNPOUR</h2>
                </div>
                <div class="content-desc mt-3 m-auto">
                    <p class="tes">UMN ECO mengharapkan ECO Citizens untuk turut menjaga dan melindungi Bumi melalui rangkaian acara dan kegiatan yang telah kami persiapkan.</p>
                </div>

            </div>
            <div class="btnWrap">



            </div>
        </div>

        <div style="height: 100px;">
            <img src="{{ asset('images/downpourLanding/lampu1.png') }}" class="lampukiri" alt="" />
            <img src="{{ asset('images/downpourLanding/lampu2.png') }}" class="lampukanan" alt="" />

            <div class="tiang" id="button">
                <img src="{{ asset('images/downpourLanding/tiang.png') }}" class="tiang-img" alt="" />
                {{-- <div class="button-tiang-kiri">
                    <div type="button" class="btn btn-dark mx-auto rounded-pill btn-regis disabled" data-bs-toggle="tooltip" data-bs-placement="top" title="Open at 26 Oktober">Registrasi</div>
                </div> --}}
                <a class="button-tiang-kiri" href="{{ route('downpourRegistration') }}" >
                    <div type="button" class="btn btn-dark mx-auto rounded-pill btn-regis">Registrasi</div>
                </a>
                <a class="button-tiang-kanan" href="{{ route('descDownpour') }}">
                    <div type="button" class="btn btn-dark mx-auto rounded-pill btn-next">Selanjutnya</div>
                </a>
            </div>

            <img src="{{ asset('images/downpourLanding/floor.png') }}" class="floor" alt="" />
        </div>
    </div>











</div>
@include('cms.template.footer')

@endsection
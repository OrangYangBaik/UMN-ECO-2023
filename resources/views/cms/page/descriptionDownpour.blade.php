@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/downpourDesc.css') }}">

@endsection

@section('content')
<div class="main position-relative">

    <div class="section-2 position-relative">
        <img src="{{ asset('images/downpourDesc/2-bg.png') }}" alt="" class="building-bg">
        <img src="{{ asset('images/downpourDesc/2-left.png') }}" alt="" class="building-left">
        <img src="{{ asset('images/downpourDesc/2-right.png') }}" alt="" class="building-right">
        <div class="blok-left"></div>

        <div class="container content-2 position-relative">
            
            <div class="banner-container position-relative">
                <img src="{{ asset('images/downpourDesc/banner-1-hp.png') }}" class="banner-1 d-block d-md-none position-relative" alt="">
                <img src="{{ asset('images/downpourDesc/banner-1.png') }}" class="banner-1 d-md-block d-none position-relative" alt="">

                <div class="title-text">1 November 2022</div>
            </div>

            <div class="penghubung position-relative">
                <img src="{{ asset('images/downpourDesc/penghubung-1.png') }}" class="banner-desc-1 d-md-block d-none position-relative" alt="">
                <img src="{{ asset('images/downpourDesc/penghubung-1-hp.png') }}" class="banner-desc-1 d-block d-md-none position-relative" alt="">

                <div class="text-container">
                    <div class="title-text">“Turning our Generation, Into Greenation”</div>
                    <div class="desc-text py-4">Seminar ini merupakan sebuah upaya untuk mengubah generasi muda yang kurang peduli terhadap lingkungan menjadi generasi yang hijau dengan peduli terhadap lingkungan dan bisa menanggulangi permasalahan sampah yang mengkhawatirkan.</div>
                </div>
            </div>
            <div class="banner-container position-relative ke2">
            <img src="{{ asset('images/downpourDesc/banner-2.png') }}" class="banner-2 d-md-block d-none position-relative" alt="">
                <img src="{{ asset('images/downpourDesc/banner-2-hp.png') }}" class="banner-2 d-block d-md-none position-relative" alt="">

                <div class="title-text">8 - 10 November 2022</div>
            </div>

            <div class="penghubung position-relative">
                <img src="{{ asset('images/downpourDesc/penghubung-2.png') }}" class="banner-desc-2 d-md-block d-none position-relative" alt="">
                <img src="{{ asset('images/downpourDesc/penghubung-2-hp.png') }}" class="banner d-block d-md-none position-relative" alt="">
                <div class="text-container">
                    <div class="title-text">Activities Booth</div>
                    
                    <div class="desc-text py-4">Selama kegiatan DOWNPOUR, ECO Friends akan bermain peran menjadi warga ECO Town yang disebut sebagai ECO Citizens yang memiliki misi untuk mengumpulkan stamp dari 4 booth activities yang ada.</div>
                </div>
            </div>

            <div class="penghubung-act position-relative">
                <img src="{{ asset('images/downpourDesc/challenge-mobile.png') }}" class="challenge-banner d-block d-md-none position-relative" alt="">
                <img src="{{ asset('images/downpourDesc/challenge.png') }}" class="challenge-banner d-md-block d-none position-relative" alt="">

                <div class="activities ">
                    <div class="title-text">The Environmental Gallery</div>
                    <div class="desc-text py-4 px-3">
                        ECO Citizens diminta untuk mencari dan mencermati seluruh "karya" yang berisikan berbagai informasi serta fun facts mengenai lingkungan dan karya tersebut tersebar di sekitar ECO TOWN! <br> <br>
                        Tak henti sampai di sana, ECO Citizens akan diberikan kuis singkat mengenai informasi tersebut pada booth ECO Gallery!
                    </div>
                </div>
            </div>
            <div class="penghubung-act position-relative">
                <img src="{{ asset('images/downpourDesc/challenge-mobile.png') }}" class="challenge-banner d-block d-md-none" alt="">
                <img src="{{ asset('images/downpourDesc/challenge.png') }}" class="challenge-banner d-md-block d-none" alt="">

                
                <div class="activities py-3">
                    <div class="title-text">Maru On Strike</div>
                    <div class="desc-text py-4 px-3">ECO Citizens akan diberi kesempatan untuk menjatuhkan pin bowling yang telah disediakan sebanyak-banyaknya! Jumlah pin yang bertahan menandakan jumlah pertanyaan soal edukasi yang wajib ECO Citizens jawab dengan TRUE or FALSE.</div>
                </div>
            </div>
            <div class="penghubung-act position-relative">
                <img src="{{ asset('images/downpourDesc/challenge.png') }}" class="challenge-banner d-md-block d-none" alt="">
                <img src="{{ asset('images/downpourDesc/challenge-mobile.png') }}" class="challenge-banner d-block d-md-none" alt="">
                <div class="activities">
                    <div class="title-text">Throw It!</div>
                    <div class="desc-text py-4 px-3">
                        ECO Citizens nantinya akan berhadapan dengan berbagai macam jenis sampah organik, anorganik dan B3. Sampah-sampah tersebut wajib untuk dipilah sesuai jenisnya, dengan cara melempar sampah ke dalam keranjang yang sudah disediakan layaknya bermain bola basket.
                        <br><br> Uji kehandalanmu melalui aktivitas ini!
                    </div>
                </div>
            </div>

            <div class="penghubung-act position-relative">
                <img src="{{ asset('images/downpourDesc/challenge.png') }}" class="challenge-banner d-md-block d-none" alt="">
                <img src="{{ asset('images/downpourDesc/challenge-mobile.png') }}" class="challenge-banner d-block d-md-none" alt="">
                <div class="activities">
                    <div class="title-text">Drop Your Empties</div>
                    <div class="desc-text py-4 px-3">ECO Citizens diajak untuk menyumbangkan kemasan bekas sisa konsumsi bersih seperti kosmetik, kaleng makanan, dan lainnya yang nantinya akan didonasikan ke organisasi yang dapat menqurai dan menjadikan barang bekas yang telah terkumpulkan menjadi hal yang berguna kembali!
                        <br><br> Khusus di booth ini, ECO Citizens akan mendapatkan bonus <b>+1 SKKM Pengabdian Masyarakat</b>, loh!
                    </div>
                </div>
            </div>

            <div class="banner-container position-relative ke3 ">
                <img src="{{ asset('images/downpourDesc/banner-1-hp.png') }}" class="banner-1 d-block d-md-none" alt="">
                <img src="{{ asset('images/downpourDesc/banner-1.png') }}" class="banner-1 d-md-block d-none" alt="">

                <div class="title-text">Additional Activity</div>
            </div>

            <div class="penghubung position-relative">
                <img src="{{ asset('images/downpourDesc/penghubung-3.png') }}" class="banner-desc-3 d-md-block d-none position-relative" alt="">
                <img src="{{ asset('images/downpourDesc/penghubung-2-hp.png') }}" class="banner d-block d-md-none position-relative" alt="">
                <div class="text-container">
					<div class="desc-text py-4"><b>+1 SKKM Minat Bakat</b> dengan mengikuti DOWNPOUR VIDEO CHALLENGE, dengan mengunggah video berdurasi maksimal 2 menit berisi dokumentasi kegiatan DOWNPOUR di FIRST ACCOUNT Instagram peserta. Ketentuan termasuk mention @umn_eco dan menyertakan tagar #DOWNPOURVIDEOCHALLENGE #DOWNPOUR2022 #TheGreenTownOfOurs</div>
                </div>
            </div>

            <div class="button-maru position-relative">
                <div class="position-absolute maru-wrapper">
                    <img src="{{ asset('images/downpourDesc/maru.png') }}" class="maru" alt="">
                    <a class="btn-container btn-regis" href="{{ route('downpourRegistration') }}">
                        <div class="btn-text" >Registrasi</div>
                    </a>
                    <a class="btn-container btn-keten" href="https://drive.google.com/file/d/1MR6xAlRRM-a2ECsRdaoz90LJQMlJu47l/view?usp=sharing">
                        <div class="btn-text" >Regulasi</div>
                    </a>
                </div>
                

            </div>
        </div>

    </div>
</div>
@include('cms.template.footer')
@endsection
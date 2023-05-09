@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-us.css') }}">
@endsection

@section('content')
<span class="scroll-icon"></span>
<div id="home" style="background-color:#301414;height:auto;position:relative;">
    <!-- <div id="scene-1" class="position-relative mx-auto">
        <div id="upper-lava" style="background:url({{ asset('images/home/upper-lava.png')}});" class="position-fixed assets">
            
        </div>
        <div id="lower-lava" style="background:url({{ asset('images/home/lower-lava.png')}});" class="position-fixed assets">

        </div>
        <div id="lava-flow" style="background:url({{ asset('images/home/lava-flow.png')}});" class="position-fixed assets">
            
        </div>
        <div id="lava-flow-2" style="background:url({{ asset('images/home/lava-flow.png')}});" class="position-fixed assets">
            
        </div>
        <img src="{{ asset('images/home/about_umn_eco.png')}}" alt="" class="position-fixed oprec-text col-12 col-lg-4 col-md-6" style="">
    </div> -->
    <div id="scene-2" class="position-relative mx-auto">
        <div class="fixed-wrapper">
            <img src="{{ asset('images/home/cloud-left.png')}}" alt="" class="position-fixed cloud-left col-12 col-lg-6 col-md-8 scene-2-img">

            <img src="{{ asset('images/home/cloud-right.png')}}" alt="" class="position-fixed cloud-right col-12 col-lg-6 col-md-8 scene-2-img">

            <img src="{{ asset('images/home/umn-eco-logo.png')}}" alt="" class="position-fixed umn-eco-logo col-6 col-xl-2 col-sm-3 scene-2-img" style="">

            <div id="mountain-left" style="background:url({{ asset('images/home/mountain-left.png')}});" class="position-fixed assets col-6">
            
            </div>
            <div id="mountain-right" style="background:url({{ asset('images/home/mountain-right.png')}});" class="position-fixed assets">
            
            </div>
            <div id="foreground" style="background:url({{ asset('images/home/foreground.png')}});" class="position-fixed assets">
            
            </div>

            <img src="{{ asset('images/home/butterfly.png')}}" alt="" class="position-fixed butterfly col-6 col-lg-3 col-md-4 scene-2-img" style="">

            <img src="{{ asset('images/home/bird.png')}}" alt="" class="position-fixed bird col-6 col-lg-3 col-md-4 scene-2-img" style="">
        </div>
    </div>
    <div id="scene-3" class="position-relative mx-auto">
        <div class="pt-5" style="height:200px;"></div>
        <div class="home-desc container col-12 col-md-10 mx-auto row"  id="aboutus" style="padding-top:10rem;padding-bottom:10rem;background-image:url({{ asset('images/home/umn-eco-background.png') }});">
            <div class="home-left-container col-12 col-lg-6">
                <div class="home-desc-title">
                    UMN ECO
                </div>
                <div class="home-desc-subtitle">
                    earth . caring . operation
                </div>
                <div class="home-desc-content mt-3 pb-5 col-lg-12" style="text-align:justify;">
                    UMN ECO merupakan kegiatan mahasiswa dinaungi BEM UMN yang bertujuan untuk membangun kesadaran mahasiswa dengan melakukan aksi nyata dalam melestarikan lingkungan di bumi. 
                    <br><br>
                    ECO merupakan singkatan dari <em>Earth, Caring, & Operation</em> yang berarti tidak merusak dan membahayakan lingkungan.
                </div>
            </div>
            <div class="home-right-container col-12 col-lg-6"  style="margin-top: -15%;">
                <lottie-player src="{{ asset('images/home/gif-1.json') }}"  background="transparent"  speed="1"  loop autoplay></lottie-player>
            </div>
        </div>
        <div class="content-container" style="background-color:#2A6B49;position:relative;">
            <div class="circle" style="width: 150px;height: 150px;background: #2A6B49;position:absolute;top:0;left:50%;transform:translate(-50%, -50%);border-radius:100%"></div>
            <div class="home-tagline mt-5 container-xxl" style="padding-top:10rem;padding-bottom:10rem;">
                <div class="tagline-left col-12 col-md-7 pb-5 mb-5 mb-md-0 row">
                    <lottie-player src="{{ asset('images/home/gif-2.json') }}"  background="transparent"  speed="1"  loop autoplay ></lottie-player>
                </div>
                <div class="tagline-right col-12 col-md-5 pb-5">
                    <div class="col-12 col-md-12 mx-auto tagline-content">
                        <div class="tagline-title mt-5 px-5">
                            We act for the better earth !
                        </div>
                        <div class="tagline-subtitle px-5"  style="text-align:justify;">
                            <p style="color: #D1B478;" class="mb-5">OUR TAGLINE</p>
                            <p>Melalui penggunaan tagline ini, kami bertujuan untuk mengajak ECO Friends dalam melakukan aksi nyata demi mewujudkan bumi yang lebih baik.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-theme container row mx-auto py-5">
                <div class="home-theme-left col-12 col-lg-7 position-relative">
                    <img src="{{ asset('images/home/graphics_3.png') }}" alt="" class="graph3">
                    <div class="home-theme-title position-relative">
                        TEMA
                    </div>
                    <div class="home-theme-content mt-3 pb-5 position-relative">
                        Dengan bangga, UMN ECO 2022 mempersembahkan tema baru pada tahun 2022
					ini bertajuk “Endless Venture to Treasure Our Nature”. Tema yang diangkat tahun ini
					bercerita tentang suatu perjalanan yang tidak akan pernah berakhir dalam menjaga
					dan melestarikan alam Nusantara kita yang sangat berharga.
                    </div>
                </div>
                <div class="home-theme-right col-lg-5 col-12 position-relative" style="margin-top: -10%;">
                    <img src="{{ asset('images/home/graphics_2.png') }}" alt="" class="graph2">
                    <lottie-player src="{{ asset('images/home/gif-3.json') }}"  background="transparent"  speed="1"  loop autoplay ></lottie-player>
                </div>
            </div>
 
            <div class="home-concept container-xl" style="padding-top:10rem;padding-bottom:10rem;">
                <div class="concept-box col-12 col-md-12 mx-auto" style="background-image:url({{ asset('images/home/graphics_1.png') }});background-size:contain;">
                    <div class="concept-title mb-5">
                        KONSEP
                    </div>
                    <div class="concept-subtitle pb-lg-5">
                        Untuk memberikan dampak positif terhadap Nusantara, UMN ECO 2022 mengusung
						konsep <em>"Dynamic Seasons of Nusantara"</em> sebagai bentuk representasi dari dua iklim
					yang silih berganti, dinamis, dan memiliki pengaruh besar terhadap alam Nusantara.
						<br><br>
					Dengan begitu, kami berharap agar kegiatan UMN ECO 2022 nantinya dapat
					menjadi wadah dan rumah bagi setiap orang untuk dapat memberikan dampak baik
					terhadap alam Nusantara yang beragam.

                    </div>
                    <div class="concept-middle row mt-5 pb-lg-5">
                        <div class="col-lg-1"></div>
                        <div class="vision-mission-left col-12 col-lg-4 mb-5 mb-lg-0" style="background-image:url({{asset('images/home/grass.jpg')}}">

                        </div>
                        <div class="col-lg-1"></div>
                        <div class="vision-mission-right col-12 col-lg-6 my-auto">
                            <div class="vision">
                                <p class="vision-mission-title">VISI</p>
                                Mewujudkan pribadi yang peduli, berintegritas, serta bertanggung jawab terhadap lingkungan hidup mereka.
                            </div>
                            <div class="mission mt-5">
                                <p class="vision-mission-title">MISI</p>
                                Menghadirkan organisasi yang berfungsi sebagai wadah bagi para ECO Friends (masyarakat) untuk berperan aktif dalam melestarikan lingkungan.
                                <br><br>
                                Menyelenggarakan kegiatan yang mencerminkan perwujudan Sustainable Development Goals (SDGs), khususnya pada poin 12 dan 13.

                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        @include('cms.template.footer')
    </div>
</div>

@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/aboutus2021.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')
    <div class="all-content position-relative">
        {{-- Tahun Switch --}}
        <div class="year position-absolute">
            <h4 class="switch-year">2023</h4>
            <h4 class="switch-year">2022</h4>
            <h4 class="switch-year">2021</h4>
        </div>

        {{-- Content 2021 --}}
        <div class="main main-content-2021 position-relative">
            <h2 class="title justify-content-center w-100 align-items-center pt-5 d-xl-none d-flex">WELCOME TO ECO FAMILY!</h2>
            <div class="container position-relative section-1 text-center d-xl-block d-none mb-5" >
                <h2 class="title text-center mb-5 margin-title">WELCOME TO ECO FAMILY!</h2>
                    {{-- GAMBAR DI PC --}}
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/ANTA.png') }}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/ARTO.png') }}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/BACARITA.png') }}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/GANTAR.png') }}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/GENTA.png') }}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/umn-eco-logo.png')}}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/JAGAT.png') }}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/LAWANG.png') }}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/LIKU.png') }}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/LUA.png') }}" alt="">
                    <img class="slider-item mb-2" width="10%" src="{{ asset('images/oprec2/logo/ORTA.png') }}" alt="">
            </div>
                <div class="swiper swiper-2021 d-xl-none d-flex pt-5 mb-5">
                   {{-- GAMBAR DI HP --}}
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/ANTA.png') }}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/ARTO.png') }}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/BACARITA.png') }}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/GANTAR.png') }}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/GENTA.png') }}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/umn-eco-logo.png')}}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/JAGAT.png') }}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/LAWANG.png') }}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/LIKU.png') }}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/LUA.png') }}" alt=""></div>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/ORTA.png') }}" alt=""></div>
                    </div>
                </div>

            {{-- Anggota Tim 2021 --}}
            <div class="scrolling-wrapper-flexbox margin2021">
                @foreach($teams2021 as $team2021)
                <div class="content-selector">
                    <div class="content card bg-aboutus about-content">
                        <h4 class="me-3 mt-2 about-name">{{ $team2021->name }}</h4>
                        <h6 class="me-3 about-jabatan">{{ $team2021->jabatan }}</h6>
                        <div style="height:295px; width:295px; overflow:hidden">
                            <img src="{{ asset('images/aboutus/people'.$team2021->image) }}" loading=lazy width="295" style="overflow:hidden"/>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            {{-- Tema Konsep 2021 --}}
            <div class="content-temaKonsep pb-5 mt-5">
                <div class="overflow-temaKonsep">
                    <div class="content-container d-flex margin2021">
                        <div class="white-bg-aboutus all-2021-logo eco-logo justify-content-center align-items-center d-flex margin2021">
                            <img src="{{ asset('images/umn-eco-logo.png')}}" alt="">
                        </div>
                        <div class="white-bg-aboutus content-about-1 d-flex flex-column justify-content-start p-4">
                            <div class="concept-title mb-1">
                                TEMA
                            </div>
                            <div class="concept-subtitle pb-lg-5">
                                Di tahun 2021, UMN ECO akan mengangkat tema ‘Environmental Compassion for Our Nation’ sebagai agenda dasar utama. Tema tersebut mencerminkan rasa keprihatinan secara mendalam yang ingin diberikan terhadap bangsa terutama dalam ranah lingkungan, yang mana didalamnya terdapat komponen biotik dan abiotik yang saling berhubungan secara timbal balik.
                            </div>
            
                            <div class="concept-title mb-1">
                                KONSEP
                            </div>
                            <div class="concept-subtitle pb-lg-5">
                                Untuk kembali mewujudkan warna dan keindahan asli dari alam Indonesia yang terkontaminasi oleh berbagai hal, UMN ECO 2021 mengusung konsep True Colors of Nature sebagai bentuk representasi dari keindahan alam Indonesia yang disimbolkan oleh banyak warna.

                                Dengan begitu, kami berharap kegiatan UMN ECO 2021 dapat menjadi wadah untuk mengembalikan warna-warni yang dimiliki oleh alam, khususnya di Indonesia.
            
                            </div>
                        </div>
                        <div class="white-bg-aboutus content-about-2 d-flex flex-column p-4">
                            <a ><p>OUR STORY</p></a>
                            <a href="#red-about"><p>RED</p></a>
                            <a href="#green-about"><p>GREEN</p></a>
                            <a href="#blue-about"><p>BLUE</p></a>
                            <a href="#bts-about"><p>
                                BEHIND<br>
                                THE <br>
                                SCENE
                            </p></a>
                        </div>

                        <!-- red  -->
                        <div class="white-bg-aboutus content-about-3 all-2021-logo red-logo justify-content-center align-items-center d-flex" id="red-about">
                            <img src="{{ asset('images/aboutus/red/red-logo.png')}}" alt="">
                        </div>
                        <div class="white-bg-aboutus content-about-4 d-flex row p-0 m-0">
                            <div class="col-6 d-flex flex-column p-0">
                                <div><img loading=lazy src="{{ asset('images/aboutus/red/utilee.jpg')}}" alt="" class="w-100"></div>
                                <div><img loading=lazy src="{{ asset('images/aboutus/red/recounter.jpg')}}" alt="" class="w-100"></div>
                            </div>
                            <div class="col-6 p-0">
                                <img loading=lazy src="{{ asset('images/aboutus/red/rise.jpg')}}" alt="" class="w-100">

                            </div>
                        </div>
                        <div class="white-bg-aboutus content-about-5 d-flex p-0 m-0">
                            <img loading=lazy src="{{ asset('images/aboutus/red/utopia.jpg')}}" alt="" class="w-100">
                        </div> 

                        <!-- green  -->
                        <div class="white-bg-aboutus content-about-6 all-2021-logo green-logo justify-content-center align-items-center d-flex" id="green-about">
                            <img src="{{ asset('images/aboutus/green/greenate-logo.png')}}" alt="">
                        </div>
                        <div class="white-bg-aboutus content-about-7 d-flex p-0 m-0">
                            <img loading=lazy src="{{ asset('images/aboutus/green/dine.jpg')}}" alt="" class="w-100">
                        </div> 
                        <div class="white-bg-aboutus content-about-8 d-flex flex-column p-0 m-0">
                                <div><img loading=lazy src="{{ asset('images/aboutus/green/alter.jpg')}}" alt="" class="w-100"></div>
                                <div><img loading=lazy src="{{ asset('images/aboutus/green/tidbit.jpg')}}" alt="" class="w-100"></div>
                        </div>
                        <div class="white-bg-aboutus content-about-9 d-flex p-0 m-0">
                            <img loading=lazy src="{{ asset('images/aboutus/green/xhort.jpg')}}" alt="" class="w-100">
                        </div> 

                        <!-- blue  -->
                        <div class="white-bg-aboutus content-about-6 all-2021-logo blue-logo justify-content-center align-items-center d-flex" id="blue-about">
                            <img src="{{ asset('images/aboutus/blue/blue-logo.png')}}" alt="">
                        </div>
                        <div class="white-bg-aboutus content-about-7 d-flex p-0 m-0">
                            <img loading=lazy src="{{ asset('images/aboutus/blue/blue-1.jpg')}}" alt="" class="w-100">
                        </div> 
                        <div class="white-bg-aboutus content-about-8 d-flex flex-column p-0 m-0">
                                <div><img loading=lazy src="{{ asset('images/aboutus/blue/blue-2.jpg')}}" alt="" class="w-100"></div>
                                <div><img loading=lazy src="{{ asset('images/aboutus/blue/blue-3.png')}}" alt="" class="w-100"></div>
                        </div>
                        <div class="white-bg-aboutus content-about-9 d-flex p-0 m-0">
                            <img loading=lazy src="{{ asset('images/aboutus/blue/blue-4.jpg')}}" alt="" class="w-100">
                        </div> 

                        <!-- bts  -->
                        <div class="white-bg-aboutus content-about-10 all-2021-logo bts-logo justify-content-center align-items-center d-flex" id="bts-about">
                            <p>
                                Behind <br>
                                The <br>
                                Scene
                            </p>
                        </div>
                        <div class="white-bg-aboutus content-about-bts d-flex p-0 m-0">
                            <img loading=lazy src="{{ asset('images/aboutus/bts/bts-1.png')}}" alt="" class="w-100">
                        </div> 
                        <div class="white-bg-aboutus content-about-bts d-flex p-0 m-0">
                            <img loading=lazy src="{{ asset('images/aboutus/bts/bts-2.png')}}" alt="" class="w-100">
                        </div> 
                        <div class="white-bg-aboutus content-about-bts d-flex p-0 m-0">
                            <img loading=lazy src="{{ asset('images/aboutus/bts/bts-3.png')}}" alt="" class="w-100">
                        </div> 
                        <div class="white-bg-aboutus content-about-bts d-flex p-0 m-0">
                            <img loading=lazy src="{{ asset('images/aboutus/bts/bts-4.png')}}" alt="" class="w-100">
                        </div> 

                        <!-- thanks  -->
                        <div class="white-bg-aboutus content-about-thanks all-2021-logo justify-content-center align-items-center d-flex" id="blue-about">
                            <div class="d-flex flex-column">
                                <div class="text-content text-end">
                                    THANK YOU ECO <br>
                                    FAMILY 2021!
                                </div>
                                <div class="text-desc text-end">
                                    For more highlight please check out our <br>
                                    Instagram!
                                </div>
                                <div class="d-flex w-100 justify-content-end">
                                    <a href="https://www.instagram.com/umn_eco/" class="text-end"><img src="{{ asset('images/home/icon_ig.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <div class="empty-container" style="min-width:200px;">

                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>




        <!-- Content 2022 -->
        <div class="main main-content-2022 position-relative">
            <h2 class="title justify-content-center w-100 align-items-center pt-5 d-xl-none d-flex">WELCOME TO ECO FAMILY!</h2>
            <div class="container position-relative section-1 text-center mb-5 d-xl-block d-none" >
                <h2 class="text-center mb-5 margin-title">WELCOME TO ECO FAMILY!</h2>
                {{-- GAMBAT BUAT PC --}}
                <img class="slider-item-2022 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/ANTA.png') }}" alt="">
                <img class="slider-item-2022 mb-2" width="10%" src="{{ asset('images/oprec2/logo/ARTO.png') }}" alt="">
                <img class="slider-item-2022 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/BACARITA.png') }}" alt="">
                <img class="slider-item-2022 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/GANTAR.png') }}" alt="">
                <img class="slider-item-2022 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/GENTA.png') }}" alt="">
                <img class="slider-eco mb-2 " src="{{ asset('images/umn-eco-logo.png')}}" alt="">
                <img class="slider-item-2022 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/JAGAT.png') }}" alt="">
                <img class="slider-item-2022 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/LAWANG.png') }}" alt="">
                <img class="slider-item-2022 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/LIKU.png') }}" alt="">
                <img class="slider-item-2022 mb-2" width="10%" src="{{ asset('images/oprec2/logo/LUA.png') }}" alt="">
                <img class="slider-item-2022 mb-2" width="10%" src="{{ asset('images/oprec2/logo/ORTA.png') }}" alt="">
            </div>
            <div class="swiper swiper-2022 d-xl-none d-flex pt-5 mb-5">
                <div class="swiper-wrapper">
                    <!-- Slides for HP -->
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/ANTA.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/ARTO.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/BACARITA.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/GANTAR.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/GENTA.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/umn-eco-logo.png')}}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/JAGAT.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/LAWANG.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/LIKU.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/LUA.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/ORTA.png') }}" alt=""></div>
                </div>
            </div>

            <div class="mb-5 mx-3">
                <div class="overflow-temaKonsep-2022">
                    <div class="d-flex justify-content-center overflow-temaKonsep-2022-content">
                        <div class="white-bg-aboutus all-2022-logo eco-logo justify-content-center align-items-center d-flex">
                            <img src="{{ asset('images/umn-eco-logo.png')}}" alt="">
                        </div>
                        <div class="white-bg-aboutus content-about-2022a d-flex flex-column justify-content-start p-4">
                            <div class="concept-title-2022 mb-1">
                                TEMA
                            </div>
                            <div class="concept-subtitle-2022">
                                Dengan bangga, UMN ECO 2022 mempersembahkan tema baru pada tahun 2022
                                ini bertajuk “Endless Venture to Treasure Our Nature”. Tema yang diangkat tahun ini
                                bercerita tentang suatu perjalanan yang tidak akan pernah berakhir dalam menjaga
                                dan melestarikan alam Nusantara kita yang sangat berharga.
                            </div>
                        </div>
                        <div class="white-bg-aboutus content-about-2022b d-flex flex-column justify-content-start p-4">
                            <div class="concept-title-2022 mb-1">
                                KONSEP
                            </div>
                            <div class="concept-subtitle-2022">
                                Untuk memberikan dampak positif terhadap Nusantara, UMN ECO 2022 mengusung
                                konsep <em>"Dynamic Seasons of Nusantara"</em> sebagai bentuk representasi dari dua iklim
                            yang silih berganti, dinamis, dan memiliki pengaruh besar terhadap alam Nusantara.
                                <br><br>
                            Dengan begitu, kami berharap agar kegiatan UMN ECO 2022 nantinya dapat
                            menjadi wadah dan rumah bagi setiap orang untuk dapat memberikan dampak baik
                            terhadap alam Nusantara yang beragam.
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{-- Content 2023 --}}
        <div class="main main-content-2023 position-relative">
            <h2 class="title justify-content-center w-100 align-items-center pt-5 d-xl-none d-flex">WELCOME TO ECO FAMILY!</h2>
            <div class="container position-relative section-1 text-center mb-5 d-xl-block d-none" >
                <h2 class="text-center mb-5 margin-title">WELCOME TO ECO FAMILY!</h2>
                {{-- GAMBAT BUAT PC --}}
                <img class="slider-item-2023 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/ANTA.png') }}" alt="">
                <img class="slider-item-2023 mb-2" width="10%" src="{{ asset('images/oprec2/logo/ARTO.png') }}" alt="">
                <img class="slider-item-2023 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/BACARITA.png') }}" alt="">
                <img class="slider-item-2023 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/GANTAR.png') }}" alt="">
                <img class="slider-item-2023 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/GENTA.png') }}" alt="">
                <img class="slider-eco mb-2 " src="{{ asset('images/umn-eco-logo.png')}}" alt="">
                <img class="slider-item-2023 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/JAGAT.png') }}" alt="">
                <img class="slider-item-2023 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/LAWANG.png') }}" alt="">
                <img class="slider-item-2023 mb-2 " width="10%" src="{{ asset('images/oprec2/logo/LIKU.png') }}" alt="">
                <img class="slider-item-2023 mb-2" width="10%" src="{{ asset('images/oprec2/logo/LUA.png') }}" alt="">
                <img class="slider-item-2023 mb-2" width="10%" src="{{ asset('images/oprec2/logo/ORTA.png') }}" alt="">
            </div>
            <div class="swiper swiper-2023 d-xl-none d-flex pt-5 mb-5">
                <div class="swiper-wrapper">
                    <!-- Slides for HP -->
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/ANTA.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/ARTO.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/BACARITA.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/GANTAR.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/GENTA.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/umn-eco-logo.png')}}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/JAGAT.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/LAWANG.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/LIKU.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/LUA.png') }}" alt=""></div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"><img class="slider-item mb-5" width="150px" src="{{ asset('images/oprec2/logo/ORTA.png') }}" alt=""></div>
                </div>
            </div>

            <div class="mb-5 mx-3">
                <div class="overflow-temaKonsep-2023">
                    <div class="d-flex justify-content-center overflow-temaKonsep-2023-content">
                        <div class="white-bg-aboutus all-2023-logo eco-logo justify-content-center align-items-center d-flex">
                            <img src="{{ asset('images/umn-eco-logo.png')}}" alt="">
                        </div>
                        <div class="white-bg-aboutus content-about-2023a d-flex flex-column justify-content-start p-4">
                            <div class="concept-title-2023 mb-1">
                                TEMA
                            </div>
                            <div class="concept-subtitle-2023">
                                Kami, UMN ECO 2023, hadir kembali dengan mendatangkan tema baru bertitel “Know Your Path for Earth Sustainability”. Kisah di balik tema yang diusung tahun ini adalah tentang bagaimana UMN ECO akan mengajak ECO Friends untuk kembali melangkah serta melampaui berbagai lika-liku perjalanan dengan tujuan memelihara, melindungi, dan melestarikan bumi.
                            </div>
                        </div>
                        <div class="white-bg-aboutus content-about-2023b d-flex flex-column justify-content-start p-4">
                            <div class="concept-title-2023 mb-1">
                                KONSEP
                            </div>
                            <div class="concept-subtitle-2023">
                                Demi menjaga keberlangsungan bumi kita bersama, UMN ECO 2023 dengan bangga mengusung konsep “The Dwelling Place of Nature’s Temple”. Konsep ini menggambarkan bagaimana ECO Friends nantinya akan menyinggahi tempat-tempat berharga dalam melakukan eksplorasi panjang guna menjaga bumi dari keterpurukan.  
                                <br><br>
                                Dengan demikian, UMN ECO 2023 berharap ECO Friends dapat melakukan persinggahan agar mampu melangkah lebih maju dalam menjaga bumi tercinta dengan berfokus kepada tiga aspek yang erat dengan kehidupan manusia sehari-hari yaitu darat, laut, dan udara.                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@include('cms.template.footer')
@endsection
    
@section('custom-js')
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });

        const swiper = new Swiper('.swiper-2021', {
            speed: 400,
            slidesPerView: 3,
            slideActiveClass: 'swiper-items-active',
            centeredSlides: true,
            initialSlide: 5,
            pagination: 'swiper-slide',
            paginationClickable: true,
        });

        const swiper2 = new Swiper('.swiper-2022', {
            speed: 400,
            slidesPerView: 3,
            slideActiveClass: 'swiper-items-active',
            centeredSlides: true,
            initialSlide: 5,
            pagination: 'swiper-slide',
            paginationClickable: true,
            enabled: false,
        });

        const swiper3 = new Swiper('.swiper-2023', {
            speed: 400,
            slidesPerView: 3,
            slideActiveClass: 'swiper-items-active',
            centeredSlides: true,
            initialSlide: 5,
            pagination: 'swiper-slide',
            paginationClickable: true,
            enabled: false,
        });
    </script>
    <script src="{{ asset('js/cms/page/about-us-2021.js') }}"></script>
@endsection
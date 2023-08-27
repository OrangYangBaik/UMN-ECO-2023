@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cms/page/milestone.css') }}">
@endsection

@section('content')
<div class="container-milestone">
        <div class="bg-utama"></div>
        <div class="gradasi-bg"></div>
        <div class="gradasi-bg-2"></div>
        <!-- <div>
            <img class="gif-temple" src="assets/GIF TEMPLE 1 REVISI.gif" />
        </div> -->
        <div class="rumah-temple">
        <div class="eco-temple">
            <img src="{{ asset('images/milestone/ECO Tample.svg') }}" />
        </div>
        <div class="daun-3">
            <img src="{{ asset('images/milestone/3 daun.svg') }}" />
        </div>
        <div class="bush-1-belakang">
            <img src="{{ asset('images/milestone/Bush 1 belakang.svg') }}" />
        </div>
        <div class="bush-1-depan">
            <img src="{{ asset('images/milestone/Bush 1 depan.svg') }}" />
        </div>
        <div class="bush-1-depan-kiri">
            <img src="{{ asset('images/milestone/Bush 1 depan.svg') }}" />
        </div>
        <div class="bush-1-depan-kanan">
            <img src="{{ asset('images/milestone/Bush 1 depan.svg') }}" />
        </div>
        <div class="bush-2-kanan">
            <img src="{{ asset('images/milestone/Bush 2 kanan.svg') }}" /> 
        </div>
        <div class="bush-2-kiri">
            <img src="{{ asset('images/milestone/Bush 2 kiri.svg') }}" />
        </div>
        <div class="bush-3-kanan">
            <img src="{{ asset('images/milestone/Bush 3 kanan.svg') }}" />
        </div>
        <div class="bush-3-kiri">
            <img src="{{ asset('images/milestone/Bush 3 kiri.svg') }}" />
        </div>
        <div class="palm-tree-kanan">
            <img src="{{ asset('images/milestone/Palm Tree kanan.svg') }}" />
        </div>
        <div class="palm-tree-kiri">
            <img src="{{ asset('images/milestone/Palm Tree kiri.svg') }}" />
        </div>
        <div class="rumput-laut-kanan">
            <img src="{{ asset('images/milestone/Rumput Laut kanan.svg') }}" />
        </div>
        <div class="rumput-laut-kiri">
            <img src="{{ asset('images/milestone/Rumput Laut kiri.svg') }}" />
        </div>
        <div class="siluet-temple">
            <img src="{{ asset('images/milestone/Siluet tample.svg') }}" />
        </div>
        </div>
        <div class="bambu-kiri">
            <img src="{{ asset('images/milestone/Dekorasi kiri.svg') }}" alt="">
        </div>
        <div class="bambu-kiri-dua">
            <img src="{{ asset('images/milestone/Dekorasi kiri.svg') }}" alt="">
        </div>
        <div class="bambu-kiri-tiga">
            <img src="{{ asset('images/milestone/Dekorasi kiri.svg') }}" alt="">
        </div> 
        <div class="bambu-kiri-empat">
            <img src="{{asset('images/milestone/Dekorasi kiri.svg') }}" alt="">
        </div>
        <div class="bambu-kanan">
            <img src="{{ asset('images/milestone/Dekorasi kanan.svg') }}" alt="">
        </div> 
        <div class="bambu-kanan-dua">
            <img src="{{ asset('images/milestone/Dekorasi kanan.svg') }}" alt="">
        </div> 
        <div class="bambu-kanan-tiga">
            <img src="{{ asset('images/milestone/Dekorasi kanan.svg') }}" alt="">
        </div>
        <div class="bambu-kanan-empat">
            <img src="{{ asset('images/milestone/Dekorasi kanan.svg') }}" alt="">
        </div>
        <div class="sungai">
            <img src="{{ asset('images/milestone/River.svg') }}" alt="">
            <div class="gps"><img src="{{ asset('images/milestone/GPS.svg') }}" alt=""></div>
         </div>
        <div class="background-2"></div>
        <div class="gen-1">
                <div class="tong-sampah">
                    <img src="{{ asset('images/milestone/Trash can.svg') }}" alt="">
                </div>
                <div class="teks-gen1">
                    <div class="text-gen1">
                        <h2 class="header-1">Bank Sampah <img class="garis" src="{{ asset('images/milestone/Garis.svg') }}" alt=""></h2>
                        <div class="gen-tahun1">
                        <h2 class="tahun"> 2016</h2>
                        <h2 class="arrow-gen">Gen 1 <img class="arrow" src="{{ asset('images/milestone/Arrow.svg') }}" alt=""></h2> 
                        </div>
                    </div>
                    <p>
                        <span>CHROLOFEEL,</span> sebuah kegiatan yang diselenggarakan oleh Bank Sampah Gen 1 untuk membangkitkan kepedulian mahasiswa/i terhadap alam melalui pengumpulan sampah dengan undian hadiah yang menarik.
                    </p>
                </div>
        </div>
        <div class="gen-2">
            <div class="tong-sampah-2">
                <img src="{{ asset('images/milestone/Trash bag.svg') }}" alt="">
            </div>
            <div class="teks-gen2">
                <div class="text-gen2">
                    <div class="gen-tahun2">
                    <h2 class="tahun-2"> 2017</h2>
                    <h2 class="arrow-gen2">Gen 2 <img class="arrow-2" src="{{ asset('images/milestone/Arrow.svg') }}" alt=""></h2> 
                    </div>
                    <h2 class="header-2"><img class="garis-2" src="{{ asset('images/milestone/Garis.svg') }}" alt=""> Bank Sampah</h2>
                </div>
                <p>
                    <span>Spread Awareness About Cleanliness (S.P.A.R.C),</span> sebuah kegiatan dari Bank Sampah Gen 2 dalam bentuk kerja sama dengan beberapa sekolah yang didokumentasikan sebagai puncak dari acara <span class="italic">Open Seminar Transparansi.</span>
                </p>
            </div>
        </div>
        <div class="gen-3">
            <div class="tong-sampah-3">
                    <img src="{{ asset('images/milestone/Truck.svg') }}" alt="">
                </div>
                <div class="teks-gen3">
                    <div class="text-gen3">
                        <h2 class="header-3">Bank Sampah <img class="garis-3" src="{{ asset('images/milestone/Garis.svg') }}" alt=""></h2>
                        <div class="gen-tahun3">
                            <h2 class="tahun-3"> 2018</h2>
                            <h2 class="arrow-gen3">Gen 3 <img class="arrow-3" src="{{ asset('images/milestone/Arrow.svg') }}" alt=""></h2> 
                        </div>
                    </div>
                    <p>
                        Bank Sampah Gen 3 telah mengadakan beberapa kegiatan berupa <span>Workshop Daur Ulang Sampah</span> hingga <span>ECO-Run</span> dengan objektif mengedukasi <br>mahasiswa/i secara interaktif.
                    </p>
                </div>
        </div>
        <div class="gen-4">
        <div class="tong-sampah-4">
                <img src="{{ asset('images/milestone/Label.svg') }}" alt="">
            </div>
            <div class="teks-gen4">
                <div class="text-gen4">
                    <div class="gen-tahun4">
                    <h2 class="tahun-4"> 2019</h2>
                    <h2 class="arrow-gen4">Gen 4 <img class="arrow-4" src="{{ asset('images/milestone/Arrow.svg') }}" alt=""></h2> 
                    </div>
                    <h2 class="header-4"><img class="garis-4" src="{{ asset('images/milestone/Garis.svg') }}" alt=""> Bank Sampah</h2>
                </div>
                <p>
                    Bank Sampah Gen 4 bersama OMB UMN, menyelenggarakan <span>GROW WITH NATURE</span> yang merupakan sebuah kegiatan sosial berupa kunjungan ke beberapa sekolah.
                </p>
            </div>
        </div>
       <div class="gen-5">
            <div class="tong-sampah-5">
                    <img src="{{ asset('images/milestone/Plant.svg') }}" alt="">
                </div>
                <div class="teks-gen5">
                    <div class="text-gen5">
                        <h2 class="header-5">Bank Sampah <img class="garis-5" src="{{ asset('images/milestone/Garis.svg') }}" alt=""></h2>
                        <div class="gen-tahun5">
                        <h2 class="tahun-5"> 2020</h2>
                        <h2 class="arrow-gen5">Gen 5 <img class="arrow-5" src="{{ asset('images/milestone/Arrow.svg') }}" alt=""></h2> 
                        </div>
                    </div>
                    <p>
                        Bank Sampah Gen 5 mengajak mahasiswa/i berpartisipasi dalam 3 kegiatan besar yang tentunya berdampak baik bagi bumi, yaitu <span>SPACE (Submit PAper And Clean Earth), ADEM (Ada DEmi alaM), dan RUSH (RUn to SHare).</span>
                    </p>
                </div>
        </div>
         <div class="gen-6">
            <div class="tong-sampah-6">
                    <img src="{{ asset('images/milestone/Rubbish bin.svg') }}" alt="">
                </div>
                <div class="teks-gen6">
                    <div class="text-gen6">
                        <div class="gen-tahun6">
                        <h2 class="tahun-6"> 2021</h2>
                        <h2 class="arrow-gen6">Gen 1 <img class="arrow-6" src="{{ asset('images/milestone/Arrow.svg') }}" alt=""></h2> 
                        </div>
                        <h2 class="header-6"><img class="garis-6" src="{{ asset('images/milestone/Garis.svg') }}" alt=""> UMN ECO</h2>
                    </div>
                    <p>
                        Di tahun pertamanya ini, UMN ECO mengangkat tema <span>“Environmental Compassion for Our Nation”</span> yang mencerminkan rasa keprihatinan secara mendalam terhadap bangsa dalam ranah lingkungan, dengan konsep <span>“True Colors of Nature”</span>. UMN ECO melaksanakan 3 kegiatan utama, yaitu <span>RED, GREEN</span> dan <span>BLUE.</span>
                    </p>
                </div>
        </div>
        <div class="gen-7">
            <div class="tong-sampah-7">
                    <img src="{{ asset('images/milestone/Tote bag.svg') }}" alt="">
                </div>
                <div class="teks-gen7">
                    <div class="text-gen7">
                        <h2 class="header-7">UMN ECO <img class="garis" src="{{ asset('images/milestone/Garis.svg') }}" alt=""></h2>
                        <div class="gen-tahun7">
                        <h2 class="tahun-7"> 2022</h2>
                        <h2 class="arrow-gen7">Gen 2 <img class="arrow-7" src="{{ asset('images/milestone/Arrow.svg') }}" alt=""></h2> 
                        </div>
                    </div>
                    <p>
                        UMN ECO Gen 2 mengangkat tema <span>“Endless Ventures to Treasure our Nature”</span>, artinya sebuah perjalanan yang tidak akan pernah putus. Dengan konsep <span>“Dynamic Season of Nusantara”</span> yang mengambil isu kekeringan dan musim hujan dan memiliki mascot Bernama <span>Maru</span> yang diambil dari kata “kemarau” dan “hujan”. 2 kegiatan utama yang akan dilaksanakan, yaitu <span>DROUGHT</span> dan <span>DOWNPOUR.</span>
                    </p>
                </div>
        </div>
        <div class="gen-8"> 
            <div class="tong-sampah-8">
                    <img src="{{ asset('images/milestone/Bottle Container.svg') }}" alt="">
                </div>
                <div class="teks-gen8">
                    <div class="text-gen8">
                        <div class="gen-tahun8">
                        <h2 class="tahun-8"> 2023</h2>
                        <h2 class="arrow-gen8">Gen 3 <img class="arrow-8" src="{{ asset('images/milestone/Arrow.svg') }}" alt=""></h2>
                        </div> 
                        <h2 class="header-8"><img class="garis-8" src="{{ asset('images/milestone/Garis.svg') }}" alt=""> UMN ECO</h2>
                    </div>
                    <p>
                        Di tahun ini, UMN ECO Gen 3 mengangkat tema <span>“Know Your Path for Earth’s Sustainability”</span>. Tema ini menggambarkan sebuah ekspansi atau langkah untuk mempertahankan dan melestarikan kondisi bumi. Dengan konsep <span>“The Dwelling Places of Natures Temple”</span>, UMN ECO Gen 3 mengambil isu carbon footprint (emisi karbon) yang menjadi isu kode merah akibat berbagai aktivitas manusia sehari-hari.
                    </p>
                </div>
            </div>
    </div> 
@endsection


<!-- Javascript -->
@section('custom-js')
@endsection
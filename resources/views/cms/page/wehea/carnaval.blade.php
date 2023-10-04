@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/carnaval.css') }}">
@endsection

@section('content')
    @include('cms.page.wehea.floatingIcons')
    <div class="outer-container-carnaval">
        <div class="container-carnaval">
            <!-- <div class="background-1"></div>
          <div class="background-2"></div> -->
            <img class="background-carnaval" src="{{ asset('images/wehea/carnaval/Background.png') }}" />
            <img class="dekor1-1-carnaval" src="{{ asset('images/wehea/carnaval/Dekor carnaval 1.svg') }}" />
            <img class="dekor1-2-carnaval" src="{{ asset('images/wehea/carnaval/Dekor carnaval 1.svg') }}" />
            <img class="dekor4-carnaval" src="{{ asset('images/wehea/carnaval/Dekor carnaval 4.svg') }}" />
            <!-- <img class="salinan-balon-1-carnaval" src="{{ asset('images/wehea/carnaval/Salinan Balon 1.svg') }}" />
          <img class="salinan-balon-2-carnaval" src="{{ asset('images/wehea/carnaval/Salinan Balon 2.svg') }}" />
          <img class="balon-nala-carnaval" src="{{ asset('images/wehea/carnaval/Balon nala.svg') }}" />
          <img class="confetti-1-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" />
          <img class="confetti-2-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" />
          <img class="confetti-3-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" />
          <img class="confetti-4-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" />
          <img class="confetti-5-carnaval" src="{{ asset('images/wehea/carnaval/Confetti  1.svg') }}" /> -->
            <img class="full-confetti-carnaval" src="{{ asset('images/wehea/carnaval/Full Confetti.svg') }}" />
            <div class="ferris-wheel-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Ferris wheel.svg') }}" />
            </div>
            <div class="market-makanan-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Market makanan.svg') }}" />
            </div>
            <div class="market-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Market.svg') }}" />
            </div>
            <div class="carousel-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Carousel.svg') }}" />
            </div>
            <div class="carnaval-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Carnaval.svg') }}" />
            </div>
            <div class="swing-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Swing.svg') }}" />
            </div>
            <div class="tenda-biru-muda-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Tenda karnaval biru muda.svg') }}" />
            </div>
            <div class="backdrop-filter"></div>
            <div id="popup5" class="clickable-tenda-biru-muda">
                <div class="popup-tenda-biru-muda">
                    <h2>CAKRASHA (RODA HARAPAN)</h2>
                    <p>Setiap usaha yang dilakukan pasti akan membuahkan hasil dan membawa harapan baru. Setiap poin yang
                        ECO Friends kumpulkan melalui berbagai aktivitas di Hidden City in Wehea dapat ditukarkan dengan
                        berbagai perlengkapan yang dapat membantu ECO Friends menjalankan hidup yang berkelanjutan.
                    </p>
                    <div class="popup-tenda">
                        <img src="{{ asset('images/wehea/carnaval/Tenda karnaval biru muda.svg') }}" alt="">
                    </div>
                    <a class="close" href="#">
                        <div class="button-kembali">
                            <button>KEMBALI</button>
                        </div>&times;
                    </a>
                    <div class="nala-balai-kota">
                        <img src="{{ asset('images/wehea/carnaval/token nala 4.png') }}" alt="">
                    </div>
                    <div class="button-kembali">
                    </div>
                </div>
            </div>
            <a class="button-tenda-biru-muda" href="#popup5">
                <div class="tanda-seru-biru-muda-carnaval">
                    <span>!</span>
                    <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}" alt="bottom beak">
                </div>
            </a>
            <div class="tenda-biru-tua-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Tenda karnaval biru tua.svg') }}" />
            </div>
            <div id="popup4" class="clickable-tenda-biru-tua">
                <h2>CHARADES/BARATA</h2>
                <p>Kalau kita berbuat sesuatu yang baik pasti tidak selalu sendirian, harus ada bantuan dari orang lain
                    karena ada beberapa hal yang orang lain bisa lihat tetapi sedang kita tidak bisa melihatnya, begitupun
                    sebaliknya. Sehingga untuk melakukan hal baik tersebut maka perlu untuk melengkapi satu sama lain.
                </p>
                <div class="popup-tenda">
                    <img src="{{ asset('images/wehea/carnaval/Tenda karnaval biru tua.svg') }}" alt="">
                </div>
                <a class="close" href="#">
                    <div class="button-kembali">
                        <button>KEMBALI</button>
                    </div>&times;
                </a>
                <div class="nala-balai-kota">
                    <img src="{{ asset('images/wehea/carnaval/token nala 3.png') }}" alt="">
                </div>
            </div>
            <a class="button-tenda-biru-tua" href="#popup4">
                <div class="tanda-seru-biru-tua-carnaval">
                    <span>!</span>
                    <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}" alt="bottom beak">
                </div>
            </a>
            <div class="tenda-kuning-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Tenda karnaval kuning.svg') }}" />
            </div>
            <div id="popup3" class="clickable-tenda-kuning">
                <h2>SANGGADENGAH</h2>
                <p>Aktivitas ini disebut juga Jawab untuk segala karena diri kita kadang gatau kita ngarah kemana, jadi kita
                    harus selalu mempersiapkan berbagai pengetahuan dan skill buat nyelesain tantangan atau masalah dalam
                    setiap skenario
                </p>
                <div class="popup-tenda">
                    <img src="{{ asset('images/wehea/carnaval/Tenda karnaval kuning.svg') }}" alt="">
                </div>
                <a class="close" href="#">
                    <div class="button-kembali">
                        <button>KEMBALI</button>
                    </div>&times;
                </a>
                <div class="nala-balai-kota">
                    <img src="{{ asset('images/wehea/carnaval/token nala 2.png') }}" alt="">
                </div>
            </div>
            <a class="button-tenda-kuning" href="#popup3">
                <div class="tanda-seru-kuning-carnaval">
                    <span>!</span>
                    <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}"
                        alt="bottom beak">
                </div>
            </a>
            <div class="tenda-merah-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Tenda karnaval merah.svg') }}" />
            </div>
            <div id="popup1" class="clickable-tenda-merah">
                <h2>CAGAK MARTA</h2>
                <p>Pilar Jenga menggambarkan kelestarian alam. Setiap block Jenga merepresentasikan kegiatan atau tindakan
                    yang bisa dilakukan untuk menjaga kelestarian alam. Semakin banyak block Jenga yang ditarik atau semakin
                    banyak tindakan yang tidak kita lakukan untuk menjaga lingkungan akhirnya dapat merusak kelestarian
                    alam.
                </p>
                <div class="popup-tenda">
                    <img src="{{ asset('images/wehea/carnaval/Tenda karnaval merah.svg') }}" alt="">
                </div>
                <a class="close" href="#">
                    <div class="button-kembali">
                        <button>KEMBALI</button>
                    </div>&times;
                </a>
                <div class="nala-balai-kota">
                    <img src="{{ asset('images/wehea/carnaval/token nala 5.png') }}" alt="">
                </div>
            </div>
            <a class="button-tenda-merah" href="#popup1">
                <div class="tanda-seru-merah-carnaval">
                    <span>!</span>
                    <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}"
                        alt="bottom beak">
                </div>
            </a>
            <div class="tenda-oren-carnaval">
                <img src="{{ asset('images/wehea/carnaval/Tenda karnaval oren.svg') }}" />
            </div>
            <div id="popup2" class="clickable-tenda-oren">
                <h2>JANGKAH DELES</h2>
                <p>Setiap kotak merepresentasikan tindakan yang ramah lingkungan. Namun, tidak jarang kita melakukan
                    tindakan yang terlihat ramah lingkungan walaupun sebenarnya tetap berdampak buruk pada lingkungan. Maka
                    dari itu, kita harus lebih cermat dan waspada ketika mengambil langkah dalam suatu tindakan.
                </p>
                <div class="popup-tenda">
                    <img src="{{ asset('images/wehea/carnaval/Tenda karnaval oren.svg') }}" alt="">
                </div>
                <a class="close" href="#">
                    <div class="button-kembali">
                        <button>KEMBALI</button>
                    </div>&times;
                </a>
                <div class="nala-balai-kota">
                    <img src="{{ asset('images/wehea/carnaval/token nala 5.png') }}" alt="">
                </div>
            </div>
            <a class="button-tenda-oren" href="#popup2">
                <div class="tanda-seru-oren-carnaval">
                    <span>!</span>
                    <img class="bottom-beak" src="{{ asset('images/wehea/carnaval/Bottom beak.svg') }}"
                        alt="bottom beak">
                </div>
            </a>
            <img class="nala-carnival" src="{{ asset('images/wehea/carnaval/Nala balai kota.svg') }}">
        </div>
    </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/wehea/carnival.js') }}"></script>
@endsection

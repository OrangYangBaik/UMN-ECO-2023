@extends('2021.template.app')

@section('custom-css')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/2021/page/oprec.css') }}">
<link rel="stylesheet" href="{{ asset('css/2021/page/modal.css') }}">
@endsection

@section('content')
<div id="main" class="main-container pt-5">
    <section id="oprec" class="container">
        <div class="oprec-logo">
            <img src="{{ asset('images/oprec/oprec-text-2.png') }}" alt="" class="image-fluid">
        </div>
        <!-- <div class="oprec-text">
            <h1>Registration Closed</h1>
        </div> -->
        <div class="logo row mx-auto">
            <div class="logo-tim">
                <a href="#0" class="open-popup"><img src="{{ asset('images/oprec/logo/GENTA.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
            </div>
            <div class="logo-tim">
                <a href="#1" class="open-popup"><img src="{{ asset('images/oprec/logo/GANTAR.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
            </div>
            <div class="logo-tim">
                <a href="#2" class="open-popup"><img src="{{ asset('images/oprec/logo/ORTA.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
            </div>
            <div class="logo-tim">
                <a href="#3" class="open-popup"><img src="{{ asset('images/oprec/logo/LUA.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
            </div>
            <div class="logo-tim">
                <a href="#4" class="open-popup"><img src="{{ asset('images/oprec/logo/ANTA.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
            </div>
            <div class="logo-tim">
                <a href="#5" class="open-popup"><img src="{{ asset('images/oprec/logo/LIKU.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
            </div>
            <div class="logo-tim">
                <a href="#6" class="open-popup"><img src="{{ asset('images/oprec/logo/BACARITA.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
            </div>
            <div class="logo-tim">
                <a href="#7" class="open-popup"><img src="{{ asset('images/oprec/logo/ARTO.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
            </div>
            <div class="logo-tim">
                <a href="#8" class="open-popup"><img src="{{ asset('images/oprec/logo/LAWANG.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
            </div>
        </div>
    </section>
</div>

<div id="0" class="popup">
    <div class="popup__container">
        <a href="#" class="popup__close" onclick="mUnblur();">
            <span class="screen-reader">close</span>
        </a>
        <div class="popup__content">
            <div class="row infologo">
                <div class="pop-img">
                    <img src="{{ asset('images/oprec/logo/GENTA.png') }}" alt="" class="image-fluid">
                </div>
                <div class="infologo-text">
                    <h2 class="text-color1">GENTA</h2>
                    <p class="text-color2">Publication</p></br>
                    <p class="text-color3">Asal Bahasa: Kutai (Kalimantan Timur)</p>
                    <p class="text-color3">Arti: Bel yang besar</p>
                    <p class="text-color3">Logo: Bel</p></br>
                    <p class="text-color3">Warna: Kuning</p>
                    <p class="text-color3">Arti Warna: Melambangkan sifat yang positif dan optimis.</p></br>
                    <p class="text-color3">Bel memiliki fungsi menyebarkan suara yang bisa diterima oleh banyak orang, sama seperti Tim Genta yang menyebarkan informasi yang dapat diterima dengan mudah oleh banyak orang.</p></br>
                    <p class="text-color1">Tugas</p>
                    <p class="text-color3">Tim Genta merupakan gabungan dari Tim Public Relations dan Tim Visual yang bertanggung jawab dalam menyebarkan informasi seputar UMN ECO 2021 secara lengkap dan akurat kepada ECO Friends.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="1" class="popup">
    <div class="popup__container">
        <a href="#" class="popup__close" onclick="mUnblur();">
            <span class="screen-reader">close</span>
        </a>
        <div class="popup__content">
            <div class="row infologo">
                <div class="pop-img">
                    <img src="{{ asset('images/oprec/logo/GANTAR.png') }}" alt="" class="image-fluid">
                </div>
                <div class="infologo-text">
                    <h2 class="text-color1">GANTAR</h2>
                    <p class="text-color2">Insurer</p></br>
                    <p class="text-color3">Asal Bahasa: Batak Simalungun</p>
                    <p class="text-color3">Arti: Perisai</p>
                    <p class="text-color3">Logo: Perisai</p></br>
                    <p class="text-color3">Warna: Abu-abu</p>
                    <p class="text-color3">Arti Warna: Melambangkan keseriusan, kestabilan, kemandirian, dan tanggung jawab.</p></br>
                    <p class="text-color3">Perisai digunakan sebagai pertahanan awal dan digunakan untuk perlindungan, sama seperti Tim Gantar yang merupakan garda terdepan atau pertahanan awal untuk menjaga keamanan berlangsungan kegiatan. </p></br>
                    <p class="text-color1">Tugas</p>
                    <p class="text-color3">Tim Gantar bertanggung jawab dalam menjaga ketertiban, serta pengecekan regulasi selama pelaksanaan kegiatan UMN ECO 2021 berlangsung.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="2" class="popup">
    <div class="popup__container">
        <a href="#" class="popup__close" onclick="mUnblur();">
            <span class="screen-reader">close</span>
        </a>
        <div class="popup__content">
            <div class="row infologo">
                <div class="pop-img">
                    <img src="{{ asset('images/oprec/logo/ORTA.png') }}" alt="" class="image-fluid">
                </div>
                <div class="infologo-text">
                    <h2 class="text-color1">ORTA</h2>
                    <p class="text-color2">Website</p></br>
                    <p class="text-color3">Asal Bahasa: Bali</p>
                    <p class="text-color3">Arti: Banyak berita</p>
                    <p class="text-color3">Logo: Koran yang digulung</p></br>
                    <p class="text-color3">Warna: Jingga</p>
                    <p class="text-color3">Arti Warna: Segar dan aktif.</p></br>
                    <p class="text-color3">Sama seperti koran yang menyajikan banyak berita, Tim Orta juga menyediakan platform yang menjadi wadah untuk memuat banyak informasi terkait UMN ECO.</p></br>
                    <p class="text-color1">Tugas</p>
                    <p class="text-color3">Tim Orta bertanggung jawab dalam mengelola website UMN ECO dengan menyajikan informasi terbaru terkait UMN ECO 2021.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="3" class="popup">
    <div class="popup__container">
        <a href="#" class="popup__close" onclick="mUnblur();">
            <span class="screen-reader">close</span>
        </a>
        <div class="popup__content">
            <div class="row infologo">
                <div class="pop-img">
                    <img src="{{ asset('images/oprec/logo/LUA.png') }}" alt="" class="image-fluid">
                </div>
                <div class="infologo-text">
                    <h2 class="text-color1">LUA</h2>
                    <p class="text-color2">Logistic</p></br>
                    <p class="text-color3">Asal Bahasa: Bengkulu</p>
                    <p class="text-color3">Arti: Gerobak</p>
                    <p class="text-color3">Logo: Gerobak</p></br>
                    <p class="text-color3">Warna: Ungu Violet</p>
                    <p class="text-color3">Arti Warna: Melambangkan keseimbangan fisik, mental, dan perhatian.</p></br>
                    <p class="text-color3">Gerobak seringkali digunakan untuk membawa berbagai barang yang dibutuhkan, sama seperti Tim Lua yang turut menyediakan segala kebutuhan fisik yang diperlukan UMN ECO nantinya.</p></br>
                    <p class="text-color1">Tugas</p>
                    <p class="text-color3">Tim Lua bertanggung jawab dalam menyediakan segala keperluan dalam pelaksanaan kegiatan UMN ECO 2021.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="4" class="popup">
    <div class="popup__container">
        <a href="#" class="popup__close" onclick="mUnblur();">
            <span class="screen-reader">close</span>
        </a>
        <div class="popup__content">
            <div class="row infologo">
                <div class="pop-img">
                    <img src="{{ asset('images/oprec/logo/ANTA.png') }}" alt="" class="image-fluid">
                </div>
                <div class="infologo-text">
                    <h2 class="text-color1">ANTA</h2>
                    <p class="text-color2">Creative</p></br>
                    <p class="text-color3">Asal Bahasa: Sanskerta</p>
                    <p class="text-color3">Arti: Penjaga Alam, Matahari</p>
                    <p class="text-color3">Logo: Matahari</p></br>
                    <p class="text-color3">Warna: Merah</p>
                    <p class="text-color3">Arti Warna: Memicu antusias dalam brainstorming, bersemangat, dan menarik perhatian.</p></br>
                    <p class="text-color3">Matahari menyinari dan memberi kehidupan bagi seluruh alam semesta, sama seperti Tim Anta yang menyinari dan memberi kehidupan (keberlangsungan) bagi pelaksanaan UMN ECO dengan konten-konten yang akan diberikan.</p></br>
                    <p class="text-color1">Tugas</p>
                    <p class="text-color3">Tim Anta bertanggung jawab dalam merancang konsep serta memberikan konten dalam pelaksanaan kegiatan UMN ECO 2021.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="5" class="popup">
    <div class="popup__container">
        <a href="#" class="popup__close" onclick="mUnblur();">
            <span class="screen-reader">close</span>
        </a>
        <div class="popup__content">
            <div class="row infologo">
                <div class="pop-img">
                    <img src="{{ asset('images/oprec/logo/LIKU.png') }}" alt="" class="image-fluid">
                </div>
                <div class="infologo-text">
                    <h2 class="text-color1">LIKU</h2>
                    <p class="text-color2">Sponsorship & Media Partner</p></br>
                    <p class="text-color3">Asal Bahasa: Sumba Timur</p>
                    <p class="text-color3">Arti: Ikatan</p>
                    <p class="text-color3">Logo: Tali yang terikat</p></br>
                    <p class="text-color3">Warna: Merah Muda</p>
                    <p class="text-color3">Arti Warna: Merepresentasikan sifat yang kalem dan lembut.</p></br>
                    <p class="text-color3">Tali yang terikat memiliki tujuan untuk mempersatukan dan memperkuat satu sama lain, sama seperti Tim Liku yang menghubungkan dan mempersatukan berbagai pihak / kemitraan dengan UMN ECO.</p></br>
                    <p class="text-color1">Tugas</p>
                    <p class="text-color3">Tim Liku merupakan gabungan dari Tim Sponsorship dan Tim Media Partner, yang bertugas untuk mencari sponsor dan media partner dari berbagai pihak yang dapat bekerja sama dengan UMN ECO 2021.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="6" class="popup">
    <div class="popup__container">
        <a href="#" class="popup__close" onclick="mUnblur();">
            <span class="screen-reader">close</span>
        </a>
        <div class="popup__content">
            <div class="row infologo">
                <div class="pop-img">
                    <img src="{{ asset('images/oprec/logo/BACARITA.png') }}" alt="" class="image-fluid">
                </div>
                <div class="infologo-text">
                    <h2 class="text-color1">BACARITA</h2>
                    <p class="text-color2">Documentation</p></br>
                    <p class="text-color3">Asal Bahasa: Manado</p>
                    <p class="text-color3">Arti: Bercerita, Banyak cerita</p>
                    <p class="text-color3">Logo: Setengah buku, setengah kamera</p></br>
                    <p class="text-color3">Warna: Hitam</p>
                    <p class="text-color3">Arti Warna: Melambangkan kanvas kosong yang diisi dengan cerita UMN ECO</p></br>
                    <p class="text-color3">Kamera memiliki fungsi untuk menangkap momen, sedangkan buku seringkali digunakan untuk menulis dan menyampaikan cerita, begitu pula dengan Tim Bacarita yang menceritakan momen tertentu mengenai UMN ECO melalui foto maupun video yang diabadikannya.</p></br>
                    <p class="text-color1">Tugas</p>
                    <p class="text-color3">Tim Bacarita bertugas untuk menceritakan serta mengabadikan seluruh momen kegiatan UMN ECO 2021, baik melalui foto maupun video.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="7" class="popup">
    <div class="popup__container">
        <a href="#" class="popup__close" onclick="mUnblur();">
            <span class="screen-reader">close</span>
        </a>
        <div class="popup__content">
            <div class="row infologo">
                <div class="pop-img">
                    <img src="{{ asset('images/oprec/logo/ARTO.png') }}" alt="" class="image-fluid">
                </div>
                <div class="infologo-text">
                    <h2 class="text-color1">ARTO</h2>
                    <p class="text-color2">Finance</p></br>
                    <p class="text-color3">Asal Bahasa: Jawa Krama Inggil (Halus/Keraton)</p>
                    <p class="text-color3">Arti: Uang</p>
                    <p class="text-color3">Logo: Huruf S yang seringkali diidentikkan dengan uang</p></br>
                    <p class="text-color3">Warna: Hijau</p>
                    <p class="text-color3">Arti Warna: Melambangkan ambisi dan kekayaan.</p></br>
                    <p class="text-color3">Logo ini menggambarkan apa yang akan dikelola oleh Tim Arto. Penggunaan bahasa Jawa halus memiliki maksud yang sama dengan eksekusi dari Tim Arto, yaitu masalah yang berkaitan dengan uang tidak dapat diselesaikan dengan cara yang keras.</p></br>
                    <p class="text-color1">Tugas</p>
                    <p class="text-color3">Tim Arto bertugas untuk menyusun strategi dalam pencarian dana, untuk pelaksanaan kegiatan UMN ECO 2021.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="8" class="popup">
    <div class="popup__container">
        <a href="#" class="popup__close" onclick="mUnblur();">
            <span class="screen-reader">close</span>
        </a>
        <div class="popup__content">
            <div class="row infologo">
                <div class="pop-img">
                    <img src="{{ asset('images/oprec/logo/LAWANG.png') }}" alt="" class="image-fluid">
                </div>
                <div class="infologo-text">
                    <h2 class="text-color1">LAWANG</h2>
                    <p class="text-color2">Registration</p></br>
                    <p class="text-color3">Asal Bahasa: Banjar</p>
                    <p class="text-color3">Arti: Pintu</p>
                    <p class="text-color3">Logo: Lubang kunci</p></br>
                    <p class="text-color3">Warna: Coklat</p>
                    <p class="text-color3">Arti Warna: Melambangkan ketabahan, nyaman, dan kepercayaan.</p></br>
                    <p class="text-color3">Pintu masuk utama selalu diibaratkan sebagai awal dari segalanya, sama seperti Tim Lawang sebagai pintu masuk utama bagi pihak eksternal untuk bergabung ke dalam kegiatan UMN ECO.</p></br>
                    <p class="text-color1">Tugas</p>
                    <p class="text-color3">Tim Lawang bertugas untuk melakukan pendataan terkait pendaftaran ECO Friends di kegiatan UMN ECO 2021.</p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('custom-js')
<script>
    $(document).ready(function() {
        var name = window.location.href;
        var lastChar = name.slice(-1);
        if (lastChar != 'm' && lastChar != '#') {
            $(".navbar").hide();
            if ($(window).width() <= 767) {
                $('.navigation-toggle-span').attr('style','display:none !important');
                $('.toggler-container').attr('style','display:none !important');
            }
        }
    });

    function mBlur() {
        var element = document.getElementById('main');
        element.classList.add("modalBlur");
        var x = document.getElementsByTagName("BODY")[0];
        x.style.overflow = "hidden";
        $(".navbar").hide();
        if ($(window).width() <= 767) {
            $('.navigation-toggle-span').attr('style','display:none !important');
            $('.toggler-container').attr('style','display:none !important');
        }
    }

    function mUnblur() {
        var element = document.getElementById('main');
        element.classList.remove("modalBlur");
        var x = document.getElementsByTagName("BODY")[0];
        x.style.overflow = "auto";
        $(".navbar").show();
        if ($(window).width() <= 767) {
            $('.navigation-toggle-span').attr('style','display:block !important');
            $('.toggler-container').attr('style','display:block !important');
        }
    }
</script>
@if (session('status') == 'success')
<script>
    Swal.fire(
        'Terima kasih telah mendaftar!',
        'Mohon menunggu E-mail dari UMN ECO untuk informasi selanjutnya.',
        'success'
    )
</script>
@endif
@if (session('status') == 'fail')
<script>
    Swal.fire("Registrasi gagal", "Terjadi kesalahan saat registrasi, silahkan coba lagi.", "error");
</script>
@endif

@endsection
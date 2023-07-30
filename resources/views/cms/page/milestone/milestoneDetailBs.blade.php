@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cms/page/milestoneDetailBs.css') }}">
@endsection

@section('content')
<div class="container-Bs">
        <!-- <img src="{{ asset('images/milestoneBs/') }}awan kiri.svg" alt="" /> -->
      <div class="temple">
        <img  src="{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}" />
      </div>
      <div class="header-1">
        <h2>BANK SAMPAH GEN 1</h2>
      </div>
      <div class="tahun">
        <h2>2016</h2>
      </div>
      <div class="overview">
        <h2 class="header-2">OVERVIEW</h2>
        <p>
            Bank Sampah Gen 1 memiliki kegiatan utama yang bertajuk <span>“Chlorofeel”</span>. Dengan diselenggarankannya kegiatan tersebut diharapkan mahasiswa/i dapat meningkatkan kepeduliannya terhadap lingkungan melalui pengumpulan dan penukaran berbagai kategori sampah.  </p>
      </div>
      <div class="programs">
        <h2 class="header-3">PROGRAMS</h2>
        <ul>
            <li><span>“Chlorofeel”</span></li>
            <li class="li-2"><span>“Dari Sampah Jadi Berkah”</span></li>
        </ul>
        <p class="paragraf-1">Kegiatan pengumpulan serta penukaran berbagai kategori sampah dengan berbagai hadiah manarik oleh para nasabah yang merupakan mahasiswa/i Universitas Multimedia Nusantara.</p>
        <p class="paragraf-2">
            Program ini dicanagkan dalam bentuk kunjungan sosial Bank Sampah Gen 1 ke salah satu sekolah yaitu SDN Curug Wetan V. Kegiatan ini adalah wujud nyata dari hasil pengumpulan sampah para nasabah yang disumbangkan menjadi alat-alat kebersihan untuk sekolah  tersebut.
        </p>
      </div>
      <div class="achievements">
        <h2 class="header-4">ACHIEVEMENTS</h2>
        <p class="paragraf-3">Kegiatan pengumpulan serta penukaran sampah yang diadakan oleh Bank Sampah Gen 1 sukses menarik perhatian, antusiasme, hingga kepedulian mahasiswa/i Universitas Multimedia Nusantara terhadap lingkungan. Hal ini terbukti dari jumlah nasabah yang mencapai angka ratusan mahasiswa/i.</p>
      </div>
      <div class="environmental">
        <h2 class="header-5">ENVIRONMENTAL OUTCOMES</h2>
        <p class="paragraf-4">“Lingkungan yang bersih adalah lingkungan yang bebas dari sampah”
        </p>
        <p class="paragraf-5">Tentunya, kegiatan yang diselenggarakan oleh Bank Sampah Gen 1 mempunyai kontribusi terhadap lingkungan agar dapat lebih bersih dan terbebas dari sampah. 
        </p>
      </div>
      <div class="jembatan">
        <img src="{{ asset('images/milestoneBs/Jembatan.svg') }}" />
      </div>
      <div class="bush-kiri">
        <img src="{{ asset('images/milestoneBs/Bush (kiri).svg') }}" />
      </div>
      <div class="bush-kanan">
        <img src="{{ asset('images/milestoneBs/Bush (kanan).svg') }}" />
      </div>
      <div class="daun-merah-kanan">
        <img src="{{ asset('images/milestoneBs/Daun merah kiri.svg') }}" />
      </div>
      <div class="daun-merah-kiri">
        <img src="{{ asset('images/milestoneBs/Daun merah kanan.svg') }}" />
      </div>
      <div class="tanaman-menjalar-kanan">
        <img src="{{ asset('images/milestoneBs/Tanaman Menjalar kiri.svg') }}" />
      </div>
      <div class="tanaman-menjalar-kiri">
        <img src="{{ asset('images/milestoneBs/Tanaman Menjalar kanan.svg') }}" />
      </div>
      <div class="tanaman-menjalar-tengah">
        <img src="{{ asset('images/milestoneBs/Tanaman Menjalar tengah.svg') }}" />
      </div>
    </div>
@endsection


<!-- Javascript -->
@section('custom-js')
@endsection
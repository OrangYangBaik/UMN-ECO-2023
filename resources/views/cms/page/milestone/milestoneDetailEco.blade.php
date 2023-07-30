@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cms/page/milestoneDetailEco.css') }}">
@endsection

@section('content')
<div class="container-Eco">
      <div class="temple" >
        <img src="{{ asset('images/milestoneEco/UMN ECO Gen 1 Temple.svg') }}" />
      </div>
      <div class="awan-kiri"><img src="{{ asset('images/milestoneEco/awan kiri.svg') }}" alt=""></div>
      <div class="awan-kiri-bawah"><img src="{{ asset('images/milestoneEco/awan kiri.svg') }}" alt=""></div>
      <div class="awan-kanan"><img src="{{ asset('images/milestoneEco/awan kiri.svg') }}" alt=""></div>
      <div class="awan-kanan-bawah"><img src="{{ asset('images/milestoneEco/awan kiri.svg') }}" alt=""></div>
      <div class="header-1">
        <h2>UMN ECO GEN 3</h2>
      </div>
      <div class="tahun">
        <h2>2023</h2>
      </div>
      <div class="overview">
        <h2 class="header-2">OVERVIEW</h2>
        <p>
            UMN ECO Gen 3 mengangkat tema <span>“Know Your Path for Earth’s Sustainability”</span>, artinya melakukan ekspansi secara berkelanjutan dengan melewati berbagai macam lika-liku perjalanan untuk menjaga, mempertahankan, dan melestarikan kondisi bumi menjadi lebih baik lagi. Dengan konsep <span>“The Dwelling Places of Natures Temple”</span> yang mengambil isu carbon footprint (emisi karbon), dimana menjadi isu kode merah akibat berbagai aktivitas manusia sehari-hari. Tahun ini, UMN ECO ditemani oleh maskot bernama <span>Nala</span> yang diambil dari kata Nirmala Bentala. ECO Friends diajak untuk berpartisipasi dalam berbagai macam kegiatan untuk menghadapi isu carbon footprint. Untuk mengetahui kegiatan apa saja yang akan dilaksanakan tahun ini, ECO Friends dapat memperoleh informasi-informasi selanjutnya di website dan akun media sosial resmi UMN ECO. <br>Sampai jumpa! </p>
      </div>
      <div class="jembatan">
        <img src="{{ asset('images/milestoneEco/Jembatan.svg') }}" />
      </div>
      <div class="bush-kiri">
        <img src="{{ asset('images/milestoneEco/Bush (kiri).svg') }}" />
      </div>
      <div class="bush-kanan">
        <img src="{{ asset('images/milestoneEco/Bush (kanan).svg') }}" />
      </div>
      <div class="daun-merah-kanan">
        <img src="{{ asset('images/milestoneEco/Daun merah kiri.svg') }}" />
      </div>
      <div class="daun-merah-kiri">
        <img src="{{ asset('images/milestoneEco/Daun merah kanan.svg') }}" />
      </div>
      <div class="tanaman-menjalar-kanan">
        <img src="{{ asset('images/milestoneEco/Tanaman Menjalar kiri.svg') }}" />
      </div>
      <div class="tanaman-menjalar-kiri">
        <img src="{{ asset('images/milestoneEco/Tanaman Menjalar kanan.svg') }}" />
      </div>
      <div class="tanaman-menjalar-tengah">
        <img src="{{ asset('images/milestoneEco/Tanaman Menjalar tengah.svg') }}" />
      </div>
    </div>
@endsection


<!-- Javascript -->
@section('custom-js')
@endsection
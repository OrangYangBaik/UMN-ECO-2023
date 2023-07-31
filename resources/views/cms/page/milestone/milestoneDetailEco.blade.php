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
      </div>
      <div class="header-1">
        <h2>{{$milestone->nama_organisasi}}</h2>
      </div>
      <div class="tahun">
        <h2>2016</h2>
      </div>
      <div class="overview">
        <h2 class="header-2">OVERVIEW</h2>
        <p>
            {{$milestone->overview}}</p>
      </div>
      <div class="programs">
        <h2 class="header-3">PROGRAMS</h2>
        <ul>
            <li><span>“Chlorofeel”</span></li>
            <li class="li-2"><span>{{$milestone->program_1}}</span></li>
        </ul>
        <p class="paragraf-1">{{$milestone->keterangan_program_1}}</p>
        <p class="paragraf-2">
            {{$milestone->keterangan_program_1}}
        </p>
        <ul>
            <li><span>“Chlorofeel”</span></li>
            <li class="li-2"><span>{{$milestone->program_2}}</span></li>
        </ul>
        <p class="paragraf-1">{{$milestone->keterangan_program_2}}</p>
        <p class="paragraf-2">
            {{$milestone->keterangan_program_2}}
        </p>
        <ul>
            <li><span>“Chlorofeel”</span></li>
            <li class="li-2"><span>{{$milestone->program_3}}</span></li>
        </ul>
        <p class="paragraf-1">{{$milestone->keterangan_program_3}}</p>
        <p class="paragraf-2">
            {{$milestone->keterangan_program_3}}
        </p>
      </div>
      <div class="achievements">
        <h2 class="header-4">ACHIEVEMENTS</h2>
        <p class="paragraf-3">{{$milestone->achievement}}</p>
      </div>
      <div class="environmental">
        <h2 class="header-5">ENVIRONMENTAL OUTCOMES</h2>
        <p class="paragraf-4">{{$milestone->environmental_outcomes}}
        </p>
        <p class="paragraf-5">{{$milestone->environmental_outcomes}}
        </p>
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
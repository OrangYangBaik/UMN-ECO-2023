@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cms/page/milestoneDetail.css') }}">
@endsection

@section('content')
    <div class="container-Bs">
        <!-- <img src="{{ asset('images/milestoneBs/') }}awan kiri.svg" alt="" /> -->
        <div class="temple">
            <img src="{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}" />
        </div>
        <div class="temple-dua">
            <img src="{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}" />
        </div>
        <style>
        @media only screen and (max-width: 468px){
                .temple::after {
                    content: "";
                    background-image: url('{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}');
                    background-size: contain;
                    background-repeat: no-repeat;
                    position: absolute; /* Position the pseudo-element absolutely */
                    top: 96rem;
                    left: 0;
                    width: 608px; 
                    height: 100%;
      }
            }

        @media only screen and (max-width: 425px){
                .temple::after {
                    content: "";
                    background-image: url('{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}');
                    background-size: contain;
                    background-repeat: no-repeat;
                    position: absolute; /* Position the pseudo-element absolutely */
                    top: 80rem;
                    left: 0;
                    width: 608px; 
                    height: 100%;
      }
            }

        @media only screen and (max-width: 425px){
                .temple::after {
                    content: "";
                    background-image: url('{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}');
                    background-size: contain;
                    background-repeat: no-repeat;
                    position: absolute; /* Position the pseudo-element absolutely */
                    top: 74rem;
                    left: 0;
                    width: 608px; 
                    height: 100%;
      }
            }
        </style>
        <div class="header-1">
            <h2>{{ $milestone->nama_organisasi }}</h2>
        </div>
        <div class="tahun">
            <h2>2016</h2>
        </div>
        <div class="overview">
            <h2 class="header-2">OVERVIEW</h2>
            <p>
                {{ $milestone->overview }}</p>
        </div>
        <div class="programs">
            <h2 class="header-3">PROGRAMS</h2>
            <ul>
                <li class="li-2"><span>{{ $milestone->program_1 }}</span></li>
            </ul>
            <p class="paragraf-1">{{ $milestone->keterangan_program_1 }}</p>
            <p class="paragraf-2">
                {{ $milestone->keterangan_program_1 }}
            </p>
            <ul>
                <li class="li-2"><span>{{ $milestone->program_2 }}</span></li>
            </ul>
            <p class="paragraf-1">{{ $milestone->keterangan_program_2 }}</p>
            <p class="paragraf-2">
                {{ $milestone->keterangan_program_2 }}
            </p>
            <ul>
                <li class="li-2"><span>{{ $milestone->program_3 }}</span></li>
            </ul>
            <p class="paragraf-1">{{ $milestone->keterangan_program_3 }}</p>
            <p class="paragraf-2">
                {{ $milestone->keterangan_program_3 }}
            </p>
        </div>
        <div class="achievements">
            <h2 class="header-4">ACHIEVEMENTS</h2>
            <p class="paragraf-3">{{ $milestone->achievement }}</p>
        </div>
        <div class="environmental">
            <h2 class="header-5">ENVIRONMENTAL OUTCOMES</h2>
            <p class="paragraf-4">{{ $milestone->environmental_outcomes }}
            </p>
        </div>
        <!-- <div class="jembatan">
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
        </div> -->
    </div>
@endsection


<!-- Javascript -->
@section('custom-js')
@endsection

@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cms/page/milestoneDetail.css') }}">
    <style>
        @media only screen and (max-width: 768px) {
            .container-Bs .temple::after {
                content: "";
                background-image: url('{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}');
                background-size: contain;
                background-repeat: no-repeat;
                position: absolute;
                top: 98%;
                left: 0;
                right: 0;
                height: 100%;
            }

        }
    </style>
    @if ($milestone->tahun == 2021)
        <style>
            @media only screen and (max-width: 1024px) {
                .temple::after {
                    content: "";
                    background-image: url('{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}');
                    background-size: contain;
                    background-repeat: no-repeat;
                    position: absolute;
                    top: 98%;
                    left: 0;
                    right: 0;
                    height: 100%;
                }

                .container-Bs {
                    height: 676.2vw;
                }

                .container-Bs .header-1 {
                    top: 2%;
                }

                .container-Bs .tahun {
                    top: 3.5%;
                }

                .container-Bs .overview {
                    top: 10.5%;
                }
            }

            @media only screen and (max-width: 768px) {
                #temple-2 {
                    display: block;
                    top: 50%;
                }

                .container-Bs {
                    height: 1325.5vw;
                }

                .container-Bs .header-1 {
                    top: 1.3%;
                }

                .container-Bs .tahun {
                    top: 2%;
                }

                .container-Bs .overview {
                    top: 5.5%;
                }
            }

            @media only screen and (max-width: 576px) {
                .container-Bs .temple {
                    top: .5% !important;
                }

                #temple-2 {
                    top: 25% !important;
                }

                #temple-3 {
                    display: block;
                    top: 49% !important;
                }

                #temple-4 {
                    display: block;
                    top: 70% !important;
                }

                #temple-2::after {
                    content: "";
                    background-image: url('{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}');
                    background-size: contain;
                    background-repeat: no-repeat;
                    position: absolute;
                    top: 98%;
                    left: 0;
                    right: 0;
                    height: 100%;
                }

                #temple-3::after {
                    content: "";
                    background-image: url('{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}');
                    background-size: contain;
                    background-repeat: no-repeat;
                    position: absolute;
                    top: 98%;
                    left: 0;
                    right: 0;
                    height: 100%;
                }

                .container-Bs {
                    height: 2210vw;
                }

                .container-Bs .header-1 {
                    top: 0.5% !important;
                }

                .container-Bs .tahun {
                    top: 1.3% !important;
                }

                .container-Bs .overview {
                    top: 3%;
                }
            }
        </style>
    @endif
@endsection

@section('content')
    <div class="container-Bs" @if ($milestone->tahun == 2021) id="container-2021" @endif>
        <img src="{{ asset('images/milestoneBs/awan kiri.svg') }}" class="awan awan-kiri-1" />
        <img src="{{ asset('images/milestoneBs/awan kiri.svg') }}" class="awan awan-kiri-2" />
        <img src="{{ asset('images/milestoneBs/awan kiri.svg') }}" class="awan awan-kiri-3" />
        <img src="{{ asset('images/milestoneBs/awan kiri.svg') }}" class="awan awan-kiri-4" />
        <img src="{{ asset('images/milestoneBs/awan kanan.svg') }}" class="awan awan-kanan-1" />
        <img src="{{ asset('images/milestoneBs/awan kanan.svg') }}" class="awan awan-kanan-2" />
        <img src="{{ asset('images/milestoneBs/awan kanan.svg') }}" class="awan awan-kanan-3" />
        <img src="{{ asset('images/milestoneBs/awan kanan.svg') }}" class="awan awan-kanan-4" />
        <div class="temple">
            <img src="{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}" />
        </div>
        <div id="temple-2" class="temple">
            <img src="{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}" />
        </div>
        <div id="temple-3" class="temple">
            <img src="{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}" />
        </div>
        <div id="temple-4" class="temple">
            <img src="{{ asset('images/milestoneBs/Bank Sampah Gen 5 Tample.svg') }}" />
        </div>
        <div class="header-1">
            <h2>{{ $milestone->nama_organisasi }} GEN {{ $milestone->gen }}</h2>
        </div>
        <div class="tahun">
            <h2>{{ $milestone->tahun }}</h2>
        </div>
        <div id="overview-{{ $milestone->tahun }}" class="overview">
            <h2 class="header-2">OVERVIEW</h2>
            <p>
                {{ $milestone->overview }}</p>
        </div>
        @if ($milestone->program_1 != '')
            <div id="programs-{{ $milestone->tahun }}" class="programs">
                <h2 class="header-2">PROGRAMS</h2>
                <ul>
                    <li class="li-2"><span>{{ $milestone->program_1 }}</span></li>
                </ul>
                <p class="paragraf-1">{{ $milestone->keterangan_program_1 }}</p>
                <p class="paragraf-2">
                    {{ $milestone->keterangan_program_1 }}
                </p>
                @if ($milestone->program_2 != '')
                    <ul>
                        <li class="li-2"><span>{{ $milestone->program_2 }}</span></li>
                    </ul>
                    <p class="paragraf-1">{{ $milestone->keterangan_program_2 }}</p>
                    <p class="paragraf-2">
                        {{ $milestone->keterangan_program_2 }}
                    </p>
                @endif
                @if ($milestone->program_3 != '')
                    <ul>
                        <li class="li-2"><span>{{ $milestone->program_3 }}</span></li>
                    </ul>
                    <p class="paragraf-1">{{ $milestone->keterangan_program_3 }}</p>
                    <p class="paragraf-2">
                        {{ $milestone->keterangan_program_3 }}
                    </p>
                @endif
            </div>
        @endif
        @if ($milestone->achievement != '')
            <div id="achievements-{{ $milestone->tahun }}" class="achievements">
                <h2 class="header-2">ACHIEVEMENTS</h2>
                <p class="paragraf-3">{{ $milestone->achievement }}</p>
            </div>
        @endif
        @if ($milestone->environmental_outcomes != '')
            <div id="environmental-{{ $milestone->tahun }}" class="environmental">
                <h2 class="header-2">ENVIRONMENTAL OUTCOMES</h2>
                <p class="paragraf-4">{{ $milestone->environmental_outcomes }}
                </p>
            </div>
        @endif
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
            <img src="{{ asset('images/milestoneBs/Tanaman Menjalar Tengah.svg') }}" />
        </div>
    </div>
@endsection


<!-- Javascript -->
@section('custom-js')
@endsection

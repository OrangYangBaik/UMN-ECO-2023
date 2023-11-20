@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/meruBetiri/pulauSatu.css') }}">
@endsection

@section('content')
    <div class="gradient__bg">
        {{-- <div class="container-meru"> --}}
        <div class="decor-meru">
            <img src="{{ asset('images/meruBetiri/decor meru bertiri.svg') }}" alt="">
        </div>
        <div class="triangle">
            <img src="{{ asset('images/meruBetiri/Triangle.svg') }}" alt="">
        </div>
        <div class="peralatan">
            <div class="tumbler">
                <img src="{{ asset('images/meruBetiri/Tumblr.svg') }}" alt="">
            </div>
            <div class="cutlery-img">
                <img src="{{ asset('images/meruBetiri/Cutlery.svg') }}" alt="">
            </div>
            <div class="number-run">
                <img src="{{ asset('images/meruBetiri/Numberrun.svg') }}" alt="">
            </div>
        </div>
        <div class="nala-doorprize">
            <img src="{{ asset('images/meruBetiri/doorprize mascot.svg') }}" alt="">
        </div>
        {{-- </div> --}}

        <div class="jadwal-section">
            <div>
                <img src="{{ asset('images/meruBetiri/Aset GOMB webBlack Calendar.png') }}" alt="">
                <div>2 Desember 2023</div>
            </div>
            <div>
                <img src="{{ asset('images/meruBetiri/Aset GOMB webBlack Clock.png') }}" alt="">
                <div>06.00-10.00  WIB (Pagi)</div>
            </div>
            <div>
                <img src="{{ asset('images/meruBetiri/Aset GOMB webBlack Location.png') }}" alt="">
                <div>Lapangan Parkir UMN </div>
            </div>
        </div>

        <div class="what-is-section">
            <h1>Meru Betiri</h1>
            <div>
                Nama Meru Betiri sendiri diambil dari 2 nama gunung yang terletak di kawasan tersebut yaitu Gunung Meru &
                Gunung Betiri.
            </div>
            <div>
                Seperti yang diketahui, daerah pegunungan memiliki suhu yang sejuk dan udara yang bersih tetapi hal tersebut
                terancam oleh kegiatan-kegiatan manusia yang meninggalkan jejak emisi karbon.
            </div>
        </div>

        <div class="pulau-satu-button-section">
            <a href="#" style="display: block; text-decoration: none;">
                {{-- <a href="https://drive.google.com/drive/folders/1-IVYjXMyT3cHttveTFE75tUom-uv3b-j" target="_blank"
                style="display: block; text-decoration: none;"> --}}
                <div class="meru-betiri-ebook">
                    <img src="{{ asset('images/meruBetiri/Vector.svg') }}" alt="EBook Icon" />
                    <div>AKSES E-BOOK</div>
                </div>
            </a>

            <a href="http://bit.ly/GoMB-UMNECO2023" target="_blank" style="display: block; text-decoration: none;">
                <div class="meru-betiri-reg">
                    <div>DAFTAR SEKARANG</div>
                </div>
            </a>
        </div>

        <div class="benefit-section">
            <div class="benefit-section-title">Dapatkan Benefit</div>
            <div class="benefit-section-date">Tanggal pengambilan: 28 November 2023</div>
            <div class="benefit-section-desc">
                +1 SKKM Pengabdian Masyarakat <br />
                Botol Minum <br />
                Cutlery (alat makan) <br />
                Medal for finisher<br />
                Running Number Sticker
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection

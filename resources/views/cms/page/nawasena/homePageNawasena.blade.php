@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/nawasena/homePageNawasena.css') }}">
@endsection

@section('content')
    <div class="nawasena-outer">
        <div id="nawasena-container">
            <div class="dekorasi-nawasena">
                <img class="dekorasi-nawasena-img" id="botol-hijau" src="{{ asset('images/nawasena/Botol ijo.svg') }}"
                    alt="Botol Hijau" />
            </div>
            <div class="dekorasi-nawasena">
                <img class="dekorasi-nawasena-img" id="botol" src="{{ asset('images/nawasena/Botol.svg') }}"
                    alt="Botol" />
            </div>
            <div class="dekorasi-nawasena">
                <img class="dekorasi-nawasena-img" id="kresek-putih" src="{{ asset('images/nawasena/Kresek putih.svg') }}"
                    alt="Kresek Putih" />
            </div>
            <div class="nawasena-left">
                <div class="nawasena-heading">
                    <h1>APA ITU THE MAKING OF NAWASENA?</h1>
                </div>
                <div class="nawasena-desc">
                    <div>
                        Dalam Bahasa Sansekerta, Nawasena artinya “masa depan yang cerah”. Hal ini selaras dengan tagline
                        UMN
                        ECO “We Act for The Better Earth” yang bermakna melestarikan dan menjaga lingkungan bumi. Melalui
                        kegiatan ini, keindahan dan keasrian alam diharapkan mampu terwujud sehingga dapat dinikmati oleh
                        generasi mendatang.
                        “The Making of Nawasena” sendiri merupakan perlombaan kreasi daur ulang yang terbuka bagi para ECO
                        Friends. Dengan kreativitas mereka, berbagai limbah diolah menjadi barang yang lebih bernilai.
                        Kompetisi
                        ini tentunya dapat membantu ECO Friends untuk menjadi pribadi yang lebih kritis serta berpola hidup
                        kreatif.

                    </div>
                </div>
                <div class="nawasena-date">
                    <img src="{{ asset('images/nawasena/calender.svg') }}" alt="Calendar Icon" />
                    <div>11 - 22 September 2023</div>
                </div>

                <a href="https://drive.google.com/drive/folders/1-IVYjXMyT3cHttveTFE75tUom-uv3b-j" target="_blank"
                    style="display: block; text-decoration: none;">
                    <div class="nawasena-ebook">
                        <img src="{{ asset('images/nawasena/book.svg') }}" alt="EBook Icon" />
                        <div>AKSES E-BOOK</div>
                    </div>
                </a>

                @if ($isSubmitted == true)
                    <button type="button" class="nawasena-reg"
                        @if ($isSubmittedLink == true) style="opacity: 0.6" disabled @endif>KUMPUL KARYA</button>
                @else
                    <button type="button" class="nawasena-reg">DAFTAR SEKARANG</button>
                @endif
            </div>
            <div class="nawasena-right">
                <div class="nawasena-chat-bubble">
                    Daur ulang merupakan salah satu kegiatan yang dapat membantu mewujudkan bumi menjadi
                    lebih asri dan mencapai masa depan yang gemilang!
                </div>
                <div class="nawasena-instructor">
                    <img id="maskot-nala" src="{{ asset('images/treasureMap/nala-maskot.svg') }}" alt="Maskot Nala" />
                </div>
            </div>


            <div class="nawasena-form-overlay-container">
                <div class="overlay-content">
                    <div class="overlay-content-heading">
                        <h1>PENDAFTARAN</h1>
                    </div>
                    <div class="overlay-content-body">
                        <p id="petunjuk-teks">
                            @if ($isSubmitted == true)
                                Unggah link google drive
                            @else
                                Unggah bukti pembayaran
                            @endif
                        </p>
                        @if ($isSubmitted == true)
                            <form id="submit-karya" method="POST" enctype="multipart/form-data"
                                action="{{ route('nawasenaLink.post') }}">
                                @csrf
                                <textarea id="karya-link" name="link" placeholder="https://drive.google.com"></textarea>

                                <div class="error-message" style="color: red; margin-top: 25px; display: none;">
                                </div>

                                <button type="submit" class="nawasena-reg-submit-karya">
                                    KUMPUL KARYA
                                </button>
                            </form>
                        @else
                            <form id="submit-ss" method="POST" enctype="multipart/form-data"
                                action="{{ route('nawasena.post') }}">
                                @csrf
                                <div class="input-image-section">
                                    <input id="ss-pembayaran" type="file" name="bukti" />
                                    <label id="input-gambar" for="ss-pembayaran">
                                        <img id="upload-image-icon" src="{{ asset('images/nawasena/add image.svg') }}"
                                            alt="Upload Image Icon" />
                                        Choose a Photo
                                    </label>
                                </div>
                                <div id="uploaded-file-name"></div>
                                <div class="input-anggota-section" style="margin-top: 20px;">
                                    <textarea id="anggota-kelompok" name="deskripsi"
                                        placeholder="1. Kathleen - 00000012345 - kathleen@student.umn.ac.id - DKV - 2022&#10;2. Ruth - 00000067890 - ruth@student.umn.ac.id - DKV - 2022&#10;3. Wijaya - 00000054321 - wijaya@student.umn.ac.id - DKV - 2022"></textarea>
                                </div>
                                <small style="font-style: italic;">*Jika berkelompok, isi data seluruh anggota. Format wajib
                                    sesuai dengan
                                    contoh</small>
                                <div>
                                    <small style="font-size: .5rem;">[Nomor] - [Nama Lengkap] - [NIM] - [Email Student] -
                                        [Program Studi] - [Angkatan]</small>
                                </div>

                                <div class="error-message" style="color: red; margin-top: 25px; display: none;">
                                </div>
                                {{-- <div id="success-message" style="color: green; margin-top: 25px; display:none;"></div>
                                <a id="link-grup" href="" target="_blank"
                                    style="display: none; color: #1f576f; cursor: pointer; font-weight: bold;">Bergabung
                                    ke
                                    grup</a> --}}
                                <button type="submit" class="nawasena-reg-submit-ss">
                                    DAFTAR SEKARANG
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/nawasena/homePageNawasena.js') }}"></script>
@endsection

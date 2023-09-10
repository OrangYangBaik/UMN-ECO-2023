@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/nawasena/homePageNawasena.css') }}">
@endsection

@section('content')
    <div class="nawasena-outer">
        <div id="nawasena-container">
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

                <button type="button" class="nawasena-reg" {{-- @if (true) disabled style="opacity: 0.6;" @endif> --}}>DAFTAR SEKARANG</button>
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
                        <p>Silakan unggah bukti pembayaran untuk pendaftaran acara Nawasena UMN ECO
                            2023!</p>
                        <form id="submit-ss" method="POST" enctype="multipart/form-data"
                            action="{{ route('nawasena.post') }}">
                            @csrf
                            <div class="input-image-section">
                                <input id="ss-pembayaran" type="file" name="bukti" />
                                <label for="ss-pembayaran">
                                    <img src="{{ asset('images/nawasena/add image.svg') }}" alt="Upload Image Icon"
                                        style="width: 40px; height: 40px;" />
                                    Choose a Photo
                                </label>
                            </div>
                            <div id="uploaded-file-name"></div>
                            <div id="error-message" style="color: red; margin-top: 25px;"></div>
                            <button type="submit" class="nawasena-reg-submit-ss">
                                DAFTAR SEKARANG
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/nawasena/homePageNawasena.js') }}"></script>
@endsection

@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/wehea/pasar.css') }}">
@endsection

@section('content')
    @include('cms.page.wehea.floatingIcons')
    <div class="pasar-outer">
        <div class="container-pasar">
            <div class="labu-pasar">
                <img src="{{ asset('images/wehea/Pasar/Labu.svg') }}" />
            </div>
            <div class="mangga-pasar">
                <img src="{{ asset('images/wehea/Pasar/Mangga.svg') }}" />
            </div>
            <div class="pasar-buah-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah.svg') }}" />
            </div>
            <div class="pasar-buah-pasar2">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah.svg') }}" />
            </div>
            <div class="labu2-pasar">
                <img src="{{ asset('images/wehea/Pasar/Labu.svg') }}" />
            </div>
            <div class="tenda-merah-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah2.svg') }}" />
            </div>
            <div class="terong-pasar">
                <img src="{{ asset('images/wehea/Pasar/Terong.svg') }}" />
            </div>
            <div class="apel-pasar">
                <img src="{{ asset('images/wehea/Pasar/Apel.svg') }}" />
            </div>
            <div class="apelIjo-pasar">
                <img src="{{ asset('images/wehea/Pasar/Apel ijo.svg') }}" />
            </div>
            <div class="pasar-buah-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah.svg') }}" />
            </div>

            <div class="mangga-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/Mangga.svg') }}" />
            </div>
            <div class="pasar-buah-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah.svg') }}" />
            </div>
            <div class="tenda-merah-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/pasarBuah2.svg') }}" />
            </div>
            <div class="apel-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/Apel.svg') }}" />
            </div>
            <div class="apelIjo-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/Apel ijo.svg') }}" />
            </div>
            <div class="daging-kanan-pasar">
                <img src="{{ asset('images/wehea/Pasar/Daging.svg') }}" />
            </div>
            <div class="merch1">
                <img src="{{ asset('images/wehea/Pasar/Merch.svg') }}" />
            </div>
            <div class="merch2">
                <img src="{{ asset('images/wehea/Pasar/Merch.svg') }}" />
            </div>
            <div class="nala">
                <img src="{{ asset('images/wehea/Pasar/Nala balai kota.svg') }}" />
            </div>
            <div class="market1">
                <img src="{{ asset('images/wehea/Pasar/Market .svg') }}" />
            </div>
            <div class="market2">
                <img src="{{ asset('images/wehea/Pasar/Market .svg') }}" />
            </div>
            <div class="arto">
                <img src="{{ asset('images/wehea/Pasar/Arto.svg') }}" />
            </div>
            <div class="bush-kiri">
                <img src="{{ asset('images/wehea/Pasar/Bush 1 belakang.svg') }}" />
            </div>
            <div class="bush-kiri2">
                <img src="{{ asset('images/wehea/Pasar/Bush 1 belakang.svg') }}" />
            </div>
            <div class="bush-kanan">
                <img src="{{ asset('images/wehea/Pasar/Bush 1 depan.svg') }}" />
            </div>
            <div class="rumput1">
                <img src="{{ asset('images/wehea/Pasar/Bush 2 kanan.svg') }}" />
            </div>
            <div class="rumput2">
                <img src="{{ asset('images/wehea/Pasar/Bush 2 kanan.svg') }}" />
            </div>
            <div class="rumput3">
                <img src="{{ asset('images/wehea/Pasar/Bush 2 kanan.svg') }}" />
            </div>
            <div class="palm-tree1">
                <img src="{{ asset('images/wehea/Pasar/Palm Tree kiri.svg') }}" />
            </div>
            <div class="palm-tree2">
                <img src="{{ asset('images/wehea/Pasar/Palm Tree kiri.svg') }}" />
            </div>
            <div class="palm-tree3">
                <img src="{{ asset('images/wehea/Pasar/Palm Tree kiri.svg') }}" />
            </div>
            <div class="pot1">
                <img src="{{ asset('images/wehea/Pasar/tanaman ga pakai tali.svg') }}" />
            </div>
            <div class="pot2">
                <img src="{{ asset('images/wehea/Pasar/tanaman ga pakai tali.svg') }}" />
            </div>

            <div id="tooltip-ecostore" class="tooltip-ecostore">
                <img src="{{ asset('images/wehea/balaiKota/Tooltip.svg') }}" alt="Tooltip Papan Tulis" />
            </div>

            <div class="tooltip-ecostore-chatbox-overlay">
                <div id="tooltip-ecostore-chatbox" class="tooltip-ecostore-chatbox">
                    <h2 style="color: #ED927B; text-align: center;">ECO Store</h2>
                    <p style="text-align: justify;">
                        ECO Store, seperti gambaran pada namanya, merupakan toko yang menjual berbagai produk eco-friendly
                        dengan intensi untuk memberikan kontribusi kembali dalam menghidupkan bumi dan alam semesta. ECO
                        Store juga dikelola langsung oleh Tim ARTO dari UMN ECO 2021 lho!
                    </p>
                    <p style="text-align: justify;">
                        <b>UMN ECO x WWF ID</b>
                        <br />
                        Dalam rangka bekerja sama dengan WWF ID, UMN ECO 2023 akan mengadakan bundling merchandise WWF x UMN
                        ECO. WWF adalah Eco-friendly store yang sudah dikenal oleh mancanegara loh, ECO Friends! Keren
                        banget ga sih🤩 Fun factnya lagi, WWF first time collab sama kampus loh!
                    </p>
                    <p style="text-align: justify;">
                        <b>Spot us on</b>
                        <br />
                        Instagram: <a href="https://www.instagram.com/ecostore_umn/" target="_blank">@ecostore_umn</a>
                    </p>
                    <div class="nala-popup-ecostore">
                        <img src="{{ asset('images/wehea/Pasar/Nala balai kota.svg') }}" alt="Nala ECO Store" />
                    </div>
                    <div class="ecostore-logo-popup-ecostore">
                        <img src="{{ asset('images/wehea/Pasar/ECOSTORE LOGO.jpg') }}" alt="ECO Store" />
                    </div>
                </div>
                <a id="tooltip-ecostore-close" href="#">
                    <div class="button-kembali">
                        <button>KEMBALI</button>
                    </div>
                </a>
            </div>

            <div class="daftarBooth">
                <button id="openPopup" style="color: #1F576E;">Lihat Daftar Booth</button>
            </div>

            <div id="popupContainer" class="popup">
                <div class="popup-content">
                    <h2 style="color: #FFFFFF; text-align: center; margin: 20px 0;">Both Tenants</h2>
                    <div class="tabel-booth-tenant">
                        <table>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kreatif Corner</td>
                                    <td>Stationary</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Teh Poci</td>
                                    <td>F&B</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Sonkit</td>
                                    <td>F&B</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Legato</td>
                                    <td>F&B</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Mbok Dimsum</td>
                                    <td>F&B</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Goed bos</td>
                                    <td>F&B</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>For You Milles</td>
                                    <td>F&B</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Kaizu</td>
                                    <td>Fashion</td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>IQOO</td>
                                    <td>Gadget</td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>Enak Powl</td>
                                    <td>F&B</td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>aboutstudio</td>
                                    <td>Foto</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a id="tooltip-booth-close" href="#">
                    <div class="button-kembali">
                        <button>KEMBALI</button>
                    </div>
                </a>
            </div>

        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/wehea/pasar.js') }}"></script>
@endsection

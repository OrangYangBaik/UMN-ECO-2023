@extends('admin.layouts.app')


@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/adminpage2022/modal.css') }}">
@endsection

@section('content')
    <div class="main">

    
        <!-- Header  -->
        <div class="container head-section py-5">
            <h1 class="text-center">Data Open Recruitment</h1>
            
        </div>
        
        <div class="row justify-content-center">
                @if(session()->has('success'))
                <div class="alert alert-success col-md-8" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif
        </div>
        <!-- Table  -->
        <div class="container main-admin-table p-3">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Team</th>
                        <th>Nama Lengkap</th>
                        <th>NIM</th>
                        <th>Angkatan</th>
                        <th>Jurusan</th>
                        <th>Waktu Daftar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Team }}</td>
                            <td>{{ $item->Name }}</td>
                            <td>{{ $item->NIM }}</td>
                            <td>{{ $item->Angkatan }}</td>
                            <td>{{ $item->Jurusan }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <button id="moreData{{$item->id}}" class="btn btn-primary">View More</button>
                                <form action="/delete/{{ $item->id }}" method="post" class="d-inline">
                                    @csrf
                                    <button id="delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
                                </form>

                                <div id="moreDataModal{{$item->id}}" class="data-modal">
                                    <!-- Modal content -->
                                    <div class="data-modal-content">
                                        <div class="data-modal-header">
                                            <span class="data-close{{$item->id}} data-close">&times;</span>
                                            <h2>
                                                {{ $item->Name }} 
                                            </h2>
                                            <h5 class="ms-3">
                                                Team {{ $item->Team }}
                                                @if( $item->Subdivisi != NULL)
                                                    - {{ $item->Subdivisi }}
                                                @endif
                                            </h5>
                                        </div>
                                        <div class="foto-p">
                                            <img src="{{ asset('storage/'.$item->Image) }}" alt="" class="image-fluid">
                                        </div>
                                        <p class="header-text">Email Student</p>
                                        <p class="text-content">{{ $item->Email }}</p>
                                        <p class="header-text">Tempat, tanggal lahir</p>
                                        <p class="text-content">{{ $item->Tempat_lahir }}, {{ $item->Tanggal_lahir }}</p>
                                        <p class="header-text">Instagram</p>
                                        <p class="text-content">{{ $item->Instagram_account }}</p>
                                        <p class="header-text">ID Line</p>
                                        <p class="text-content">{{ $item->Line_id }}</p>
                                        <p class="header-text">Nomor Telepon</p>
                                        <p class="text-content">{{ $item->Phone_number }}</p>
                                        <p class="header-text">Sebutkan tiga kelebihan Anda!</p>
                                        <p class="text-content">{{ $item->Kelebihan }}</p>
                                        <p class="header-text">Sebutkan tiga kekurangan Anda</p>
                                        <p class="text-content">{{ $item->Kekurangan }}</p>
                                        <p class="header-text">Pengalam Organisasi</p>
                                        <p class="text-content">{{ $item->Experience }}</p>
                                        <p class="header-text">Apa yang Anda ketahui tentang UMN ECO?</p>
                                        <p class="text-content">{{ $item->What }}</p>
                                        <p class="header-text">Mengapa Anda memilih untuk mendaftar ke tim {{ $item->Team }}?</p>
                                        <p class="text-content">{{ $item->Why }}</p>
                                        <p class="header-text">Seberapa paham Anda dengan Jobdesk dari tim yang Anda pilih</p>
                                        <p class="text-content">{{ $item->Paham_jobdesc }}</p>

                                        {{-- Pertanyaan per tim --}}
                                        @switch($item->Team)
                                            @case('Lawang')
                                            <p class="header-text">Dalam skala 1-10 seberapa ahli kamu dalam mengoperasikan excel dan sheets? Berikan alasanmu.</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                            <p class="header-text">Sikap apa saja yang perlu dimiliki dalam berkontribusi sebagai Tim Lawang UMN ECO?</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            @break
                                            @case('Arto')
                                            <p class="header-text">Jika Anda sebagai panitia Tim Arto lupa atau tidak teliti dalam memposting PP, Apa yang akan Anda lakukan?</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                            <p class="header-text">Dari skala 1-10 seberapa ahli Anda dalam menggunakan Microsoft Excel atau Google Sheet?</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            <p class="header-text">Jelaskan satu ide yang Anda tawarkan untuk Tim Arto dalam menghasilkan dana selain paid promote ataupun jasa isi kuesioner!</p>
                                                <p class="text-content">{{ $item->Question3 }}</p>
                                            @break
                                            @case('Bacarita')
                                            @if($item->Subdivisi == "Foto")
                                                <p class="header-text">Software apa saja yang dikuasai untuk melakukan proses editing foto?</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                                <p class="header-text">Pengalaman dokumentasi acara offline dan online apa saja yang pernah diikuti? Sertakan portofolio dan dikirim ke bacarita.umneco@gmail.com dengan subject "Open Recruitment UMN ECO 2022: Portofolio_NAMA TIM_Nama Lengkap" (minimal 5 foto untuk masing-masing acara baik online maupun offline)</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            @else
                                                <p class="header-text">Aplikasi apa yang biasa Anda digunakan untuk menyunting? (Contoh: Adobe premiere, photoshop, After Effect.) </p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                                <p class="header-text">Peralatan apa saja yang Anda miliki? (Contoh: cam, lighting, sound, dll.) </p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                                <p class="header-text">Sebutkan pengalaman dokumentasi Anda sebelumnya!</p>
                                                <p class="text-content">{{ $item->Question3 }}</p>
                                            @endif
                                            @break
                                            @case('Liku')
                                            @if($item->Subdivisi == "Sponsorship")
                                            <p class="header-text">Apa yang kamu ketahui mengenai tim yang bekerja di bidang sponsorship?</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                            <p class="header-text">Apakah kamu mempunyai kenalan organisasi/perusahaan untuk mensponsori UMN ECO? Apakah kamu bersedia mengapproach mereka untuk dijadikan sponsor?</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            @else
                                            <p class="header-text">Menurutmu skills apa saja yang harus dimiliki untuk bergabung dalam Tim LIKU (Media Relations) ?</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                            <p class="header-text">Menurutmu bagaimana cara meng-approach media-media untuk bekerja sama dengan UMN ECO? Media-media apa saja yang menurutmu layak bekerja sama dengan UMN ECO?</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            @endif
                                            @break
                                            @case('Anta')
                                            <p class="header-text">Sebutkan ide atau tema untuk kegiatan yang ingin Anda realisasikan di UMN ECO 2022 (Contoh: food waste, plastic waste, etc.) (Diperbolehkan memberi penjelasan singkat mengenai tema tersebut)</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                            @break
                                            @case('Lua')
                                            <p class="header-text">Jelaskan secara singkat seberapa jauh Anda mengenal ZOOM, dan sebutkan fitur-fitur yang ada didalamnya!</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                            <p class="header-text">Saat menjalankan tugas, Anda diharuskan untuk menggunakan laptop untuk mengoperasikan ZOOM dan gawai digunakan untuk keperluan jalur komunikasi yang menyebabkan gawai tidak dapat membuka aplikasi lain selain jalur komunikasi. Di hari dan jam yang sama Anda memiliki keperluan atau jadwal lain seperti kelas yang mengharuskan Anda untuk menggunakan aplikasi ZOOM, Jelaskan apa yang akan Anda lakukan?</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            @break
                                            @case('Orta')
                                            <p class="header-text">Apakah Anda menguasai bahasa pemrograman? Sebutkan bahasa pemrograman yang anda kuasai!</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                            <p class="header-text">Apakah Anda  pernah membuat website? Jelaskan tentang website tersebut.</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            @break
                                            @case('Gantar')
                                            <p class="header-text">Jika kamu melanggar peraturan dan tata tertib yang sudah ditetapkan, maka apa bentuk pertanggungjawaban kamu?</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                            <p class="header-text">Ekspektasi dan kontribusi apa yang bisa kamu berikan jika menjadi bagian dari Tim Gantar?</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            @break
                                            @case('Genta')
                                            @if($item->Subdivisi == "Visual")
                                                <p class="header-text">Kirimkan portfolio Anda ke email genta.umneco@gmail.com dengan subject "Open Recruitment UMN ECO 2022: Portofolio_NAMA TIM_Nama Lengkap" dan jelaskan alasan dibalik portfolio milik Anda dari segi konsep dan teknis.</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                                <p class="header-text">Apakah Anda terbiasa membuat ilustrasi vektor, 3d, atau mograph? Software apa yang biasa lakukan untuk hal tersebut?</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            @else
                                                <p class="header-text">Buatlah dua rancangan konten Tiktok untuk UMN ECO (Boleh melampirkan referensinya) beserta caption dan hastag yang menarik.</p>
                                                <p class="text-content">{{ $item->Question1 }}</p>
                                                <p class="header-text">Jika nantinya UMN ECO membuat suatu acara yang bertema “Save the Electricity”, buatlah suatu caption untuk memperkenalkan dan mendukung poster acara tersebut dengan semenarik mungkin.</p>
                                                <p class="text-content">{{ $item->Question2 }}</p>
                                            @endif
                                        @break
                                    @endswitch

                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Team</th>
                        <th>Nama Lengkap</th>
                        <th>NIM</th>
                        <th>Angkatan</th>
                        <th>Jurusan</th>
                        <th>Waktu Daftar</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script>
        @foreach($items as $item)
        // Get the modal
        var modal{{$item->id}} = document.getElementById("moreDataModal{{$item->id}}");
    
        // Get the button that opens the modal
        var btn{{$item->id}} = document.getElementById("moreData{{$item->id}}");
    
        // Get the <span> element that closes the modal
        var span{{$item->id}} = document.getElementsByClassName("data-close{{$item->id}}")[0];
    
        // When the user clicks on the button, open the modal
        btn{{$item->id}}.onclick = function() {
            modal{{$item->id}}.style.display = "block";
        }
    
        // When the user clicks on <span> (x), close the modal
        span{{$item->id}}.onclick = function() {
            modal{{$item->id}}.style.display = "none";
        }
    
        //When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal{{$item->id}}) {
                modal{{$item->id}}.style.display = "none";
            }
        }
        @endforeach
    </script>
@endsection
@extends('admin.layouts.app')


@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/adminpage2022/modal.css') }}">
@endsection

@section('content')
    <div class="main">
        <!-- Header  -->
        <div class="container head-section py-5">
            <h1 class="text-center">Data Drought</h1>
        </div>
        
		<?php $i = 1; ?>
		
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
                        <th>Name</th>
                        <th>NIM</th>
                        <th>Email Student</th>
                        <th>Jurusan</th>
                        <th>Angkatan</th>
                        <th>Instagram</th>
                        <th>Timestamp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->username_instagram }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <button id="moreData{{$item->id}}" class="btn btn-primary">View More</button>
                                {{-- <form action="/drought/delete/{{ $item->id }}" method="post" class="d-inline">
                                    @csrf
                                    <button id="delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
                                </form> --}}

                                <div id="moreDataModal{{$item->id}}" class="data-modal">
                                    <!-- Modal content -->
                                    <div class="data-modal-content">
                                        <div class="data-modal-header">
                                            <span class="data-close{{$item->id}} data-close">&times;</span>
                                            <h2>
                                                {{ $item->nama }} 
                                            </h2>
                                            <h5 class="ms-3">
                                                {{ $item->nim }}
                                            </h5>
                                        </div>
                                        <div class="foto-p">
                                            <img src="{{ asset('storage/'.$item->Image) }}" alt="" class="image-fluid">
                                        </div>
                                        <p class="header-text">Email Student</p>
                                        <p class="text-content">{{ $item->username }}</p>
                                        <p class="header-text">Jurusan (Angkatan)</p>
                                        <p class="text-content">{{ $item->jurusan }} ({{ $item->angkatan }})</p>
                                        <p class="header-text">Username Instagram</p>
                                        <p class="text-content">{{ $item->username_instagram }}</p>
                                        <p class="header-text">ID Line</p>
                                        <p class="text-content">{{ $item->id_line }}</p>
                                        <p class="header-text">Nomor Telepon</p>
                                        <p class="text-content">{{ $item->telephone }}</p>
                                        <h2 class="header-text fs-2 mt-5">Bingo Submission</h2>
                                        <p class="header-text">Aksi Hemat Air</p>
                                        <p class="text-content">@if($item->bingo_1){{ $item->bingo_1 }} @else Belum mengumpulkan @endif</p>
                                        <p class="header-text">Kisahku Menghadapi Kekeringan</p>
                                        <p class="text-content">@if($item->bingo_2){{ $item->bingo_2 }} @else Belum mengumpulkan @endif</p>
                                        <p class="header-text">Menilik Isu Kekeringan Nusantara</p>
                                        <p class="text-content">@if($item->bingo_3){{ $item->bingo_3 }} @else Belum mengumpulkan @endif</p>
                                        <p class="header-text">Tolong Rawat Teman Maru!</p>
                                        <p class="text-content">@if($item->bingo_4){{ $item->bingo_4 }} @else Belum mengumpulkan @endif</p>
                                        <p class="header-text">Maru dan Air Serba Guna</p>
                                        <p class="text-content">@if($item->bingo_5){{ $item->bingo_5 }} @else Belum mengumpulkan @endif</p>
                                        <p class="header-text">Cuci, Hemat, Cermat</p>
                                        <p class="text-content">@if($item->bingo_6){{ $item->bingo_6 }} @else Belum mengumpulkan @endif</p>
                                        <p class="header-text">Tanam Teman Maru (TTM)</p>
                                        <p class="text-content">@if($item->bingo_7){{ $item->bingo_7 }} @else Belum mengumpulkan @endif</p>
                                        <p class="header-text">Tanaman Bermicin</p>
                                        <p class="text-content">@if($item->bingo_8){{ $item->bingo_8 }} @else Belum mengumpulkan @endif</p>
                                        <p class="header-text">Pandemi? Bijak Air!</p>
                                        <p class="text-content">@if($item->bingo_9){{ $item->bingo_9 }} @else Belum mengumpulkan @endif</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>NIM</th>
                        <th>Email Student</th>
                        <th>Jurusan</th>
                        <th>Angkatan</th>
                        <th>Instagram</th>
                        <th>Timestamp</th>
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
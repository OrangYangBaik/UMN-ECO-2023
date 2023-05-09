@extends('admin.layouts.app')


@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/adminpage2022/modal.css') }}">
@endsection

@section('content')
    <div class="main">
        <!-- Header  -->
        <div class="container head-section py-5">
            <h1 class="text-center">Data Downpour</h1>
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
                        <th>Jurusan</th>
                        <th>Angkatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->student_id }}</td>
                            <td>{{ $item->major }}</td>
                            <td>{{ $item->generation }}</td>
                            <td>
                                <button id="moreData{{$item->id}}" class="btn btn-primary">View More</button>

                                <div id="moreDataModal{{$item->id}}" class="data-modal">
                                    <!-- Modal content -->
                                    <div class="data-modal-content">
                                        <div class="data-modal-header">
                                            <span class="data-close{{$item->id}} data-close">&times;</span>
                                            <h2>
                                                {{ $item->name }} 
                                            </h2>
                                            <h5 class="ms-3">
                                                {{ $item->student_id }}
                                            </h5>
                                        </div>
                                        <div class="foto-p">
                                            <img src="{{ asset('storage/'.$item->Image) }}" alt="" class="image-fluid">
                                        </div>
                                        <p class="header-text">Email Student</p>
                                        <p class="text-content">{{ $item->username_student_email }}</p>
                                        <p class="header-text">Jurusan (Angkatan)</p>
                                        <p class="text-content">{{ $item->major }} ({{ $item->generation }})</p>
                                        <p class="header-text">Username Instagram</p>
                                        <p class="text-content">{{ $item->instagram_username }}</p>
                                        <p class="header-text">ID Line</p>
                                        <p class="text-content">{{ $item->line_id }}</p>
                                        <p class="header-text">Nomor Telepon</p>
                                        <p class="text-content">{{ $item->telephone }}</p>
                                        <p class="header-text">Activity Booth Stamp</p>
                                        @if($item->activity_booth_1 === null)
                                            <div class="row" style="margin: 10px 0 0 5px">
                                                <h4 class="text-content-activity">Tidak daftar Activity Booth Downpour</h4>
                                            </div>
                                        @else
                                            <div class="row" style="margin: 10px 0 0 5px">
                                                <div class="col-4 text-right">
                                                    <h4 class="text-content-activity">ECO Environmental Gallery</h4>
                                                </div>

                                                <div class="col-8 text-right">
                                                    <div class="form-check form-switch">
                                                        <input data-id="{{ $item->id }}" data-filter="{{ $item->name }}" class="toggle-class-act-1 form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $item->activity_booth_1 ? 'checked' : '' }}>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin: 10px 0 0 5px">
                                                <div class="col-4 text-right">
                                                    <h4 class="text-content-activity">Throw It!</h4>
                                                </div>

                                                <div class="col-8 text-right">
                                                    <div class="form-check form-switch">
                                                        <input data-id="{{ $item->id }}" data-filter="{{ $item->name }}" class="toggle-class-act-2 form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $item->activity_booth_2 ? 'checked' : '' }}>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin: 10px 0 0 5px">
                                                <div class="col-4 text-right">
                                                    <h4 class="text-content-activity">Maru On Strike</h4>
                                                </div>

                                                <div class="col-8 text-right">
                                                    <div class="form-check form-switch">
                                                        <input data-id="{{ $item->id }}" data-filter="{{ $item->name }}" class="toggle-class-act-3 form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $item->activity_booth_3 ? 'checked' : '' }}>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin: 10px 0 0 5px">
                                                <div class="col-4 text-right">
                                                    <h4 class="text-content-activity">Drop Your Empties</h4>
                                                </div>

                                                <div class="col-8 text-right">
                                                    <div class="form-check form-switch">
                                                        <input data-id="{{ $item->id }}" data-filter="{{ $item->name }}" class="toggle-class-act-4 form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $item->activity_booth_4 ? 'checked' : '' }}>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="header-text">Activity Booth Additional</p>
                                            <p class="text-content">@if($item->activity_booth_additional)<a href="https://{{ $item->activity_booth_additional }}" target="_blank">{{ $item->activity_booth_additional }}</a> @else Belum mengumpulkan @endif</p>
                                        @endif
                                        <p class="header-text">Seminar Downpour</p>
                                        @if($item->seminar_ticket === null) 
                                            <div class="row" style="margin: 10px 0 0 5px">
                                                <h4 class="text-content-activity">Tidak daftar Seminar Downpour</h4>
                                            </div>
                                        @else
                                            <div class="row" style="margin: 10px 0 0 5px">
                                                <div class="col-4 text-right">
                                                    <h4 class="text-content-activity">Absensi Seminar</h4>
                                                </div>

                                                <div class="col-8 text-right">
                                                    <div class="form-check form-switch">
                                                        <input data-id="{{ $item->id }}" data-filter="{{ $item->name }}" class="toggle-class-seminar" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $item->seminar_ticket ? 'checked' : '' }}>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
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
                        <th>Jurusan</th>
                        <th>Angkatan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            <p class="mt-3">Pendaftar Activities Booth: {{ DB::table('downpour_users')->whereNotNull('activity_booth_1')->count(); }}</p>
            <p>Pendaftar Seminar: {{ DB::table('downpour_users')->whereNotNull('seminar_ticket')->count(); }}</p>
			<p>Lolos Activity Booth: {{ DB::table('downpour_users')->orWhere(function ($query) use ($items) {
                $query->where('activity_booth_1', "=", 1);
                $query->where('activity_booth_2', "=", 1);
                $query->where('activity_booth_3', "=", 1);
                $query->where('activity_booth_4', "=", 0);
                })->orWhere(function ($query) use ($items) {
                $query->where('activity_booth_1', "=", 1);
                $query->where('activity_booth_2', "=", 1);
                $query->where('activity_booth_3', "=", 0);
                $query->where('activity_booth_4', "=", 1);
                })->orWhere(function ($query) use ($items) {
                $query->where('activity_booth_1', "=", 1);
                $query->where('activity_booth_2', "=", 0);
                $query->where('activity_booth_3', "=", 1);
                $query->where('activity_booth_4', "=", 1);
                })->orWhere(function ($query) use ($items) {
                $query->where('activity_booth_1', "=", 0);
                $query->where('activity_booth_2', "=", 1);
                $query->where('activity_booth_3', "=", 1);
                $query->where('activity_booth_4', "=", 1);
                })->orWhere(function ($query) use ($items) {
                $query->where('activity_booth_1', "=", 1);
                $query->where('activity_booth_2', "=", 1);
                $query->where('activity_booth_3', "=", 1);
                $query->where('activity_booth_4', "=", 1);
                })->count(); }}</p>
        </div>

    </div>

@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
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
    <script src="{{ asset('js/admin/js/dashboardDownpour3.js') }}"></script>
@endsection
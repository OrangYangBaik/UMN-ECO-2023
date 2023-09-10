@extends('admin.template.dashboard')

@section('custom-css')
@endsection

@section('content')
    <div class="container">
        <div class="show-registered-overlay-container">
            <div class="overlay-content">
                <img src="" alt="" />
            </div>
        </div>


        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-white">Pendaftar Acara Nawasena</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="text-light mt-4 table border border-white">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bryan Richie Irawan</td>
                            <td>00000056044</td>
                            <td>
                                <a href="#" download=''>View Image</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script></script>
@endsection

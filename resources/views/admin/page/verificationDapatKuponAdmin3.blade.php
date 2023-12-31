@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/verification.css') }}">
@endsection

@section('content')
    <div style="min-height: 100vh;" class="container">
        @if (empty($requester))
            <div class="text-white">No Data</div>
        @else
            @foreach ($requester as $user)
                <div class="bg-secondary" style="width: 90vw; margin: auto; padding: 10px 15px; margin-bottom: 15px;">
                    <form class="points-form text-white" action="/admin/addKupons" method="post">
                        @csrf
                        <input type="hidden" name="userId" value="{{ $user->id }}">
                        <h3>Nama: {{ $user->nama }}</h3>
                        <h3>NIM: {{ $user->nim }}</h3>
                        <label for="point">Jumlah kupon atasan:</label>
                        <input type="number" name="jumlah_atasan" id="point" class="point-input text-dark" />
                        <label for="point">Jumlah kupon bawahan:</label>
                        <input type="number" name="jumlah_bawahan" id="point" class="point-input text-dark" />
                        {{-- <label for="point">Jumlah kupon aksesoris:</label> --}}
                        <input type="hidden" value="0" name="jumlah_aksesoris" id="point"
                            class="point-input text-dark" />
                        <button class="acc-button text-dark" type="submit">Approve</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
@endsection

@section('custom-js')
@endsection

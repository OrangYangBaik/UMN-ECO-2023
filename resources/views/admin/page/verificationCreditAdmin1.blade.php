@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/dashboardAdmin.css') }}">
@endsection

@section('content')
    <div style="min-height: 100vh;">
        @if (empty($requester))
            <div class="text-white">No Data</div>
        @else
            @foreach ($requester as $user)
                <form class="points-form text-white" action="/admin/addCredits" method="post">
                    @csrf
                    <input type="hidden" name="userId" value="{{ $user->id }}">
                    <h3>Nama: {{ $user->nama }}</h3>
                    <h3>NIM: {{ $user->nim }}</h3>
                    <label for="point">Credit tambahan:</label>
                    <input type="number" name="credit" id="credit" class="credit-input text-dark" />
                    <button class="acc-button text-dark" type="submit">Approve</button>
                </form>
            @endforeach
        @endif
    </div>
@endsection

@section('custom-js')
@endsection

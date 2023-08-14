@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/dashboardAdmin.css') }}">
@endsection

@section('content')
    @foreach ($requester as $user)
        <form class="points-form text-white" action="{{ route('add.points', ['userId' => $user->id, 'point' => 'dynamic']) }}"
            method="post">
            @csrf
            <h3>Nama: {{ $user->nama }}</h3>
            <h3>NIM: {{ $user->nim }}</h3>
            <label for="point">Poin tambahan:</label>
            <input type="number" name="point" class="point-input" id="point">
            <button class="acc-button" type="submit">Approve</button>
        </form>
    @endforeach
@endsection

@section('custom-js')
    <script>
        const forms = document.querySelectorAll('.points-form');

        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                const pointInput = form.querySelector('.point-input');
                const pointValue = pointInput.value;
                const action = form.getAttribute('action');
                const newAction = action.replace('dynamic', pointValue);

                form.setAttribute('action', newAction);
            });
        });
    </script>
@endsection

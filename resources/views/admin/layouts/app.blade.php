<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/cms/base/font.css') }}">

    {{-- Bootstrap 5 --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/adminpage2022/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminpage2022/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminpage2022/table.css') }}">

    {{-- Datatables --}}

    @yield('custom-css')
</head>
<body>


    @include('admin.layouts.sidebar')

    @yield('content')
    
    
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cms/base/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>


    @yield('custom-js')
</html>
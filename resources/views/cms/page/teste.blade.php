@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/teste1.css') }}">
@endsection

@section('content')

<div class="main">
    <!-- Desktop -->
    <img src="{{ asset('images/choiceDownpour/bg.png') }}" class="bg" alt="" />
    <img src="{{ asset('images/choiceDownpour/bg-left.png') }}" class="bg-left" alt="" />
    <img src="{{ asset('images/choiceDownpour/bg-right.png') }}" class="bg-right" alt="" />
    <img src="{{ asset('images/choiceDownpour/lamp-left.png') }}" class="lamp-left" alt="" />
    <img src="{{ asset('images/choiceDownpour/lamp-right.png') }}" class="lamp-right" alt="" />

    <!-- phone  -->

    <div class="tiang-container">
        <img src="{{ asset('images/choiceDownpour/tiang.png') }}" class="tiang" alt="" />
        @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('seminar_ticket') === null)
            <form action="{{ route('daftarSeminarDownpour') }}" method="POST" style="background-color: #DCDCDC; pointer-events: none; color:black!important"class="form-seminar btn-container btn btn-1">
                @csrf
                <button type="button"style="color: black" class="btn-text btn-button-hide" id="button-seminar" disabled>CLOSED</button>
            </form>
        @else
            <div class="btn-container btn btn-1 btn-1-confirm btn-confirm">
                <div class="btn-text">Seminar : TERDAFTAR</div>
            </div>
        @endif
        
        @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_1') === null) 
            <form action="{{ route('daftarActivityDownpour') }}" method="POST" class="form-activity btn-container btn btn-2">
                @csrf
                <button type="button" class="btn-text btn-button-hide" id="button-activity-booth">Activity Booth</button>
            </form >
        @else
            <div  class="btn-container btn btn-2 btn-2-confirm btn-confirm">
                <div class="btn-text">Activity : TERDAFTAR</div>
            </div>

            <div  class="btn-container">
                <a href={{ route("ticketDownpour") }} class="text-decoration-none" style="color:white;"><div class="btn-text text-center" disabled>Selanjutnya</div></a>
            </div>
        @endif
    </div>
</div>



@include('cms.template.footer')

@endsection

@section('custom-js')
    <script src={{ asset("js/cms/page/pendaftaranDownpour2.js") }}></script>
@endsection
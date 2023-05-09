@extends('cms.template.app')

@section('custom-css')
  <link href={{ asset("css/cms/page/pendaftaranDownpour1.css") }} rel="stylesheet"/>
@endsection

@section('content')
<div class="content-wrapper">
  <img src={{ asset('images/ticketDownpour/Background-img.png') }} class="background-page"/>
  <img src={{ asset('images/ticketDownpour/Tembok-Kanan.png') }} class="tembok-kanan"/>
  <img src={{ asset('images/ticketDownpour/Tembok-Kiri.png') }} class="tembok-kiri"/>
  <img src={{ asset('images/ticketDownpour/Water-Reflect.png') }} class="water-reflect"/>

  <div class="button-daftar">
    <div class="btn-wrapper">
      <img src={{ asset('images/downpour-logo.png') }} alt="" class="downpour-logo">
      <h2 class="text-center mt-2 ms-2 me-2 downpour-title">Yuk Daftar!</h2>
      <div class="row row-btn">
        <div class="col-6">
          @if(DB::table('settings')->where('features', 'Seminar')->value('status') == 1) 
            @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('seminar_ticket') === null) 
              <form action="{{ route('daftarSeminarDownpour') }}" method="POST" class="form-seminar">
                @csrf
                <button type="button" class="btn btn-primary btn-seminar" id="button-seminar">Daftar<br/>Seminar</button>
              </form>
            @else
              <button type="button" class="btn btn-primary btn-seminar-done" disabled>Seminar: TERDAFTAR</button>
            @endif
          @else
            <button type="button" class="btn btn-primary btn-seminar-closed" disabled>Pendaftaran Seminar Ditutup</button>
          @endif
        </div>
        <div class="col-6">
          @if(DB::table('settings')->where('features', 'Activities Booth')->value('status') == 1) 
            @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_1') === null) 
              <form action="{{ route('daftarActivityDownpour') }}" method="POST" class="form-activity">
                @csrf
                <button type="button" class="btn btn-primary btn-booth" id="button-activity-booth">Daftar<br/>Activities Booth</button> 
              </form>
            @else
              <button type="button" class="btn btn-primary btn-activity-done" disabled>Activities booth: TERDAFTAR</button>
            @endif
          @else
            <button type="button" class="btn btn-primary btn-activity-closed" disabled>Pendaftaran Activities Booth Ditutup</button>
          @endif
        </div>
      </div>
      <div class="row row-btn">
        <div class="col-12 mx-auto text-center">
          @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_1') === null) 
            <button type="button" class="btn btn-primary btn-stamp" id="button-go-to-stamp-not-registered" disabled>Selanjutnya</button>
          @else
            <a href={{ route("ticketDownpour") }}><button type="button" class="btn btn-primary btn-stamp" id="button-go-to-stamp">Selanjutnya</button></a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom-js')
  <script src={{ asset("js/cms/page/pendaftaranDownpour1.js") }}></script>
@endsection
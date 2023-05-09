@extends('cms.template.app')

@section('custom-css')
  <link href={{ asset("css/cms/page/ticketDownpour3.css") }} rel="stylesheet"/>
@endsection

@section('content')
<div class="content-wrapper">
  <img src={{ asset('images/ticketDownpour/Background-img.png') }} class="background-page"/>
  <img src={{ asset('images/ticketDownpour/Tembok-Kanan.png') }} class="tembok-kanan"/>
  <img src={{ asset('images/ticketDownpour/Tembok-Kiri.png') }} class="tembok-kiri"/>
  <img src={{ asset('images/ticketDownpour/Water-Reflect.png') }} class="water-reflect"/>
  <div class="relative-ticket">
    <img src={{ asset('images/ticketDownpour/Paper.png') }} class="paper"/>
    <div class="text-title">
      <h2 class="title-welcome">WELCOME ECO CITIZEN!</h2>
      <h2 class="subtitle-welcome">YOUR JOURNEY WILL BE RECORDED HERE</h2>
      <div class="stamp-field row">
        <div class="col-1"></div>
        <div class="col-2">
          @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_1') == 0)
            <h2 class="stamp-1 stamp-style">1</h2>
          @else
            <img class="stamp-1-done stamp-done-style" src={{ asset('images/ticketDownpour/stamp_maru.png') }}>
          @endif
        </div>
        <div class="col-2">
          @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_2') == 0)
            <h2 class="stamp-2 stamp-style">2</h2>
          @else
            <img class="stamp-2-done stamp-done-style" src={{ asset('images/ticketDownpour/stamp_maru.png') }}>
          @endif
        </div>
        <div class="col-2">
          @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_3') == 0)
            <h2 class="stamp-3 stamp-style">3</h2>
          @else
            <img class="stamp-3-done stamp-done-style" src={{ asset('images/ticketDownpour/stamp_maru.png') }}>
          @endif
        </div>
        <div class="col-2">
          @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_4') == 0)
            <h2 class="stamp-4 stamp-style">4</h2>
          @else
            <img class="stamp-4-done stamp-done-style" src={{ asset('images/ticketDownpour/stamp_maru.png') }}>
          @endif
        </div>
        <div class="col-2">
          <h2 class="@if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_additional') === null) stamp-A @else stamp-A-done @endif stamp-style">A</h2>
        </div>
        <div class="col-1"></div>
      </div>
      <button type="button" class="button-activity btn btn-primary" id="additional-activity">Additional Activity</button>
      <h2 class="help-text">IF YOU HAVE ANY TROUBLE, PLEASE CONTACT US ON OUR SOCIAL MEDIA <br/><a href="https://www.instagram.com" class="text-decoration-none text-anchor">@UMN.ECO</a></h2>
    </div>
  </div>
</div>

{{-- Modal --}}
<div class="modal fade text-white" id="bingoModal" tabindex="-1" aria-labelledby="bingoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content lh-base">
      <div class="modal-header d-flex justify-content-center align-items-center">
          <h5 class="modal-title pt-3 fs-3 fw-bolder" id="bingoModalLabel">ADDITIONAL ACTIVITY</h5>
      </div>

      <div class="modal-body mb-2">
        +1 SKKM Minat Bakat dengan mengikuti DOWNPOUR VIDEO CHALLENGE, dengan mengunggah video berdurasi minimal <b>30 detik</b> dan maksimal <b>2 menit</b> berisi dokumentasi kegiatan DOWNPOUR di <b>FIRST ACCOUNT</b> Instagram peserta. Ketentuan termasuk mention <b>@umn_eco</b> dan menyertakan tagar <b>#DOWNPOURVIDEOCHALLENGE #DOWNPOUR2022 #TheGreenTownOfOurs</b>
      </div>

      <div class="modal-body mb-2 text-center" style="color:rgb(133, 0, 0)">
        <b>Pengumpulan link additional activity telah ditutup!</b>
      </div>
		
      <div class="modal-footer">
          <form class="drought-form w-100 gap-4" action="{{ Route("activitySubmitVerification") }}" method="POST" id="form-modal">
            @csrf
            <div class="row">
              <div class="col-12 mb-2">
                <input type="text" class="form-control w-sm-100" id="link" name="link" @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_additional') == NULL) placeholder="Anda tidak mengikuti additional activity" @else placeholder="Link Terakhir yang anda kumpulkan: {{ DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_additional') }}"@endif disabled>
              </div>
              <input type="hidden" id="bingo-number" name="bingo_number">
            </div>
          </form>

          @error('link')
            <div class="alert alert-danger w-100 text-center p-1">
              Tautan harus diisi!
            </div>
          @enderror
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom-js')
  {{-- <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script> --}}
  <script src={{ asset("js/cms/page/ticketDownpour1.js") }}></script>
@endsection
@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/droughtBingo.css') }}">
@endsection

@section('content')
    <p class="gif-tanaman d-none">{{ asset("images/drought/bingo/tanaman.gif") }}</p>
    <div class="flex-column background-overlay d-flex justify-content-center align-items-center"
        style="background-image: url('{{ asset('images/drought/bingo/droughtBingoBackground.png') }}')">
        <h4 class="text-center">Pilih minimal 3 tantangan agar kamu berhasil mendapatkan BINGO!</h4>
        <div class="retak1" style="background-image: url('{{ asset('images/drought/bingo/retak1.png') }}')"></div>
        <div class="retak2" style="background-image: url('{{ asset('images/drought/bingo/retak2.png') }}')"></div>
        <div class="bingo-flex-container gap-3">
            @foreach ($bingos as $bingo)
                <div class="bingo-flex-item p-0">
                    <div class="bingo-title d-block w-100 h-100 text-white text-decoration-none d-flex justify-content-center align-items-center p-3" data-id={{ $bingo->id }}>{{ $bingo->title }}</div>
                    
                    <p class="bingo-description d-none">{{ $bingo->description }}</p>
                    <p class="bingo-done d-none">{{ $userBingo[$loop->index] == '0' ? '0' : '1' }}</p>
                    <div class="biji-bingo-container d-none w-100 h-100">
                      <img class="biji-bingo" src="{{ asset("/images/drought/bingo/biji.png") }}" alt="biji bingo">
                    </div>
                </div>
            @endForeach
        </div>
    </div>

    <!-- Modal-->
    {{-- BINGO NOT DONE --}}
    <div class="modal fade text-white" id="bingoModal" tabindex="-1" aria-labelledby="bingoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content lh-base">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h5 class="modal-title pt-3 fs-3 fw-bolder" id="bingoModalLabel">Modal title</h5>
            </div>

            <div class="modal-body mb-2">
                {{-- MODAL BODY GOES HERE!!! --}}
            </div>

            <div class="modal-footer">
                <form class="drought-form w-100 gap-4" action="{{ Route("bingoSubmitVerification") }}" method="POST" onkeydown="return event.key != 'Enter';">
                  @csrf
                  <div class="row">
                    <div class="col-12 col-md-9 mb-2">
                      @if($bingo->status)
                        <input type="text" class="form-control w-sm-100" id="link" name="link" placeholder="Tautan Video Instagram">
                      @endif
                    </div>
                    <div class="col-12 col-md-3">
                      @if($bingo->status)
                        <a href="#" class="btn button-submit text-dark w-100" id="modal-submit">KUMPUL</a>
                      @endif
                    </div>

                    <input type="hidden" id="bingo-number" name="bingo_number">

                  </div>
                </form>

                @error('link')
                  <div class="alert alert-danger w-100 text-center p-1">
                    Link harus diisi!
                  </div>
                @enderror
            </div>
          </div>
        </div>
    </div>

    {{-- BINGO DONE --}}
    <div class="modal fade text-white" id="bingoModalDone" tabindex="-1" aria-labelledby="bingoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content lh-base h-50 justify-content-center">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h5 class="modal-title pt-3 fs-5 fw-bolder text-center" id="bingoModalLabel">Terima kasih ECO Players, telah membantu Maru untuk menemukan jalan keluar dalam menghadapi kekeringan di DROUGHT: Determine The Way Out!</h5>
            </div>

            {{-- <div class="modal-body mb-2">
                <div class='d-flex w-100 h-100 justify-content-center align-items-center' style='font-size: 2rem;'>Terimakasih</div>
            </div> --}}

            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-success w-50 " data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
    </div>

    @include('cms.template.footer')
@endsection

@section('custom-js')
  @if(session('submit'))
  {{-- Kalo abis submit dapet 3 pohon (1 baris) --}}
    <script defer src="{{ asset('js/cms/page/bingoAfterSubmission.js') }}"></script>
  @endif
  <script defer src="{{ asset('js/cms/page/droughtBingo.js') }}"></script>
@endsection

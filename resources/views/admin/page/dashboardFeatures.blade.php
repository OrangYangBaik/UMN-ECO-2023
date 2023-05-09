@extends('admin.layouts.app')


@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/adminpage2022/modal.css') }}">
@endsection

@section('content')
    <div class="main">
        <!-- Header  -->
        <div class="container head-section py-5">
            <h1 class="text-center">Features</h1>
        </div>

        <div class="container">
            <div class="accordion mb-5" id="accordionExample">

                @if(Auth::guard('web')->user()->role == "Coordinator")
                {{-- Bingo Submission --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="BingoSubmission">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        Bingo Submission
                      </button>
                    </h2>
        
                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="BingoSubmission" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Bingo Submission Access</p>
                                </div>
                                <div class="col-4">
                                    <div class="form-check form-switch">
                                        <input data-id="{{ $bingo->id }}" class="toggle-class form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $bingo->status ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                {{-- Oprec --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="BingoSubmission">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                        Open Recruitment
                      </button>
                    </h2>
        
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="BingoSubmission" data-bs-parent="#accordionExample">
                        @foreach($teams as $team)
                            @if($team->name != 'JAGAT')
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-8 text-right">
                                            <p>Recruitment {{ $team->name }}
                                            @if( $team->subdivisi != NULL)
                                                    - {{ $team->subdivisi }}
                                            @endif
                                            </p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <div class="form-check form-switch">
                                                <input data-id="{{ $team->id }}" class="toggle-class-oprec form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $team->status ? 'checked' : '' }}>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div> 
                </div>

                {{-- Registrasi --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="BingoSubmission">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Registration
                        </button>
                    </h2>
        
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="BingoSubmission" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Account Registration Access</p>
                                </div>
                                <div class="col-4">
                                    <div class="form-check form-switch">
                                        <input data-id="{{ $features[0]->id }}" class="toggle-class-regist form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $features[0]->status ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Downpour Access --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="BingoSubmission">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        Downpour Access
                        </button>
                    </h2>
        
                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="BingoSubmission" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Seminar Registration Access</p>
                                </div>
                                <div class="col-4">
                                    <div class="form-check form-switch">
                                        <input data-id="{{ $features[1]->id }}" class="toggle-class-regist form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $features[1]->status ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Activities Booth Registration Access</p>
                                </div>
                                <div class="col-4">
                                    <div class="form-check form-switch">
                                        <input data-id="{{ $features[2]->id }}" class="toggle-class-regist form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $features[2]->status ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                {{-- DOWNLOAD RECRUITMENT --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="BingoSubmission">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Open Recruitment Excel Download
                        </button>
                    </h2>
        
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="BingoSubmission" data-bs-parent="#accordionExample">
                        @foreach($teams->unique("name") as $team)
                            @if($team->name != 'JAGAT')
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-8 text-right">
                                            <p>Recruitment {{ $team->name }} Excel Download</p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="/export/{{ $team->name }}">
                                                <button class="btn btn-primary">
                                                    Download Excel {{ $team->name }}
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-8 text-right">
                                    <p>Recruitment All Team Excel Download</p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <a href="/export">
                                        <button class="btn btn-primary">
                                            Download Excel All Team
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

                {{-- Registration Download Excel --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="BingoSubmission">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            Drought Registration Excel Download
                        </button>
                    </h2>
        
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="BingoSubmission" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Download Excel All Drought Participants</p>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('exportDrought') }}">
                                        <button class="btn btn-primary">
                                            Download Excel Drought
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Downpour Download Excel --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="BingoSubmission">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            Downpour Registration Excel Download
                        </button>
                    </h2>
        
                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="BingoSubmission" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Download Excel All Downpour Participants</p>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('exportDownpourAll') }}">
                                        <button class="btn btn-primary">
                                            Download Excel Downpour
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Download Excel Downpour Participants (Seminar/Activity Registered Only)</p>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('exportDownpour') }}">
                                        <button class="btn btn-primary">
                                            Download Excel Downpour (Seminar/Activity Registered Only)
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- NEXT FEATURE GOES HERE --}}
                    
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
<script>
    $(function(){
        $(".toggle-class").change(function(){
            var status = ($(this).prop('checked') == true) ? 1 : 0;
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/changeBingoStatus",
                data: {'status': status},
                success: function(data){
                    console.log('success');
                }
            });
        });
        $(".toggle-class-oprec").change(function(){
            var status = ($(this).prop('checked') == true) ? 1 : 0;
            var team_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/changeStatus",
                data: {'status': status, 'team_id': team_id},
                success: function(data){
                    console.log('success');
                }
            });
        });
        $(".toggle-class-regist").change(function(){
            var status = ($(this).prop('checked') == true) ? 1 : 0;
            var features_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/changeStatusFeatures",
                data: {'status': status, 'feature_id': features_id},
                success: function(data){
                    console.log('success');
                }
            });
        });
    });
</script>
@endsection
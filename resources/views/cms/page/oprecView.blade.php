@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/oprecView.css') }}">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> -->

@endsection

@section('content')

<div class="main">
    <div class="container position-relative section-1" >
        @foreach($teams->unique('name') as $team)
        <img src="{{ asset('images/oprec2/bg/'.$team->name.'.png') }}" class="asset-images artboard-bg" alt="" id="{{ $team->name }}">
        @endforeach
        @foreach($teams->unique('name') as $team)
        <img src="{{ asset('images/oprec2/gapura/'.$team->name.'.png') }}" class="asset-images gapura-lala" alt="" >
        @endforeach
        <!-- artboard-bg -->
      



        <div class="dashedborder"></div>

        <div class="slider">
            <div class="slider-inner">
                @foreach($teams->unique('name') as $team)
                    <img class="slider-item" width="10%" src="{{ asset('images/oprec2/logo/'.$team->name.'.png') }}" alt="">
                @endforeach
            </div>
        </div>
    </div>

    <div class="container text-section pb-5">
        @foreach($teams->unique('name') as $team)
        <div class="content-selector">
            <div class="row content justify-content-around">
                <div class="title-text col-12 d-flex flex-column justify-content-center align-items-md-center align-items-start text-md-center text-start">
                    <h1>{{ $team->name }}</h1>
                    <h3>{{ $team->alias }}</h3>
                </div>
                <div class="col-lg-4 col-md-6 text-start col-12 pt-2 ">
                    <p>
                        Asal Bahasa: {{ $team->language }}<br>
                        Arti: {{ $team->arti }}<br>
                        Logo: {{ $team->logo }}<br>
                    </p>
                    <br>
                    <p>
                        Warna: {{ $team->color }} <br>
                        {{ $team->articolor }}
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 text-start col-12 pt-2 ">
                    <p>
                        {{ $team->desc }}
                    </p>
                    <p>
                        {{ $team->jobdesc }}
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                @if($team->name != 'JAGAT')
                    @if($team->subdivisi)
                        @foreach($teams->where('name', $team->name) as $teamsub)
                            @if($teamsub->status)
                                <div class="col-md-3 col-6 d-flex justify-content-center py-2">
                                    <div class="button-reg text-center">
                                        <h1>{{ $teamsub->subdivisi }}</h1>
                                        <a href="/recruitmentForm/{{ $teamsub->subdivisi }}-sub"><button>Daftar</button></a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        @if($team->status)
                            <div class="col-12 d-flex justify-content-center py-2">
                                <div class="button-reg">
                                    <a href="/recruitmentForm/{{ $team->name }}"><button>Daftar</button></a>
                                </div>
                            </div>
                        @endif
                    @endif
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('cms.template.footer')

@endsection


<!-- Javascript -->
@section('custom-js')
<script>
    var findex = 1;
    let i;
    let j;
    var activeid;
    var slider = $('.slider');
    var sliderOrigin = slider.find('.slider-origin');
    var sliderItems = slider.find('.slider-item');
    var sliderInner = slider.find('.slider-inner');

    // slider origin width & height = half of item height
    sliderOrigin.width(sliderItems.outerHeight() / 2);
    sliderOrigin.height(sliderItems.outerHeight() / 2);
    sliderOrigin.css('margin-top',(sliderInner.height() / 2) - (sliderOrigin.height() / 2));

    $(`.slider-item:nth-child(${10})`).fadeIn('slow');
    $(`.slider-item:nth-child(${11})`).fadeIn('slow');

    $(`.slider-item:nth-child(${1})`).fadeIn('slow');
    $(`.slider-item:nth-child(${2})`).fadeIn('slow');
    $(`.slider-item:nth-child(${3})`).fadeIn('slow');

    $(`.asset-images:nth-child(${findex+11})`).fadeIn("slow");

    $(`.artboard-bg:nth-child(${findex})`).fadeIn("slow");

    $(`.content-selector:nth-child(${findex})`).fadeIn("slow");
   
    $('.slider-inner').children('.slider-item').click(function() {
        var index = $(this).index() + 1;

        if(findex == index){
            return;
        }

        if(index == 10){
            $(`.slider-item:nth-child(${8})`).fadeIn('slow');
            $(`.slider-item:nth-child(${9})`).fadeIn('slow');

            $(`.slider-item:nth-child(${11})`).fadeIn('slow');
            $(`.slider-item:nth-child(${1})`).fadeIn('slow');

            for(i = 2; i < 8; i++){
                $(`.slider-item:nth-child(${i})`).fadeOut('slow');
            }
        }else if (index == 1){
            $(`.slider-item:nth-child(${10})`).fadeIn('slow');
            $(`.slider-item:nth-child(${11})`).fadeIn('slow');

            $(`.slider-item:nth-child(${2})`).fadeIn('slow');
            $(`.slider-item:nth-child(${3})`).fadeIn('slow');

            for(i = 4; i < 10; i++){
                $(`.slider-item:nth-child(${i})`).fadeOut('slow');
            }
        }else if (index == 2){
            $(`.slider-item:nth-child(${11})`).fadeIn('slow');
            $(`.slider-item:nth-child(${1})`).fadeIn('slow');

            $(`.slider-item:nth-child(${3})`).fadeIn('slow');
            $(`.slider-item:nth-child(${4})`).fadeIn('slow');

            for(i = 5; i < 11; i++){
                $(`.slider-item:nth-child(${i})`).fadeOut('slow');
            }
        }else if (index == 11){
            $(`.slider-item:nth-child(${9})`).fadeIn('slow');
            $(`.slider-item:nth-child(${10})`).fadeIn('slow');

            $(`.slider-item:nth-child(${1})`).fadeIn('slow');
            $(`.slider-item:nth-child(${2})`).fadeIn('slow');

            for(i = 3; i < 9; i++){
                $(`.slider-item:nth-child(${i})`).fadeOut('slow');
            }
        }else{
            $(`.slider-item:nth-child(${index-2})`).fadeIn('slow');
            $(`.slider-item:nth-child(${index-1})`).fadeIn('slow');

            $(`.slider-item:nth-child(${index+1})`).fadeIn('slow');
            $(`.slider-item:nth-child(${index+2})`).fadeIn('slow');

            for(i = index+3; i < index+9; i++){
                $(`.slider-item:nth-child(${(i%11 != 0)? i%11 : 11})`).fadeOut('slow');
            }
        }
        var deg = 0;
        for(i = index; i < 12; i++){
            $(`.slider-item:nth-child(${i})`).css("transform", `rotate(${deg}deg)`);
            deg = deg + (360/11);
        }
        var deg = 0;
        for(j = index; j > 0; j--){
            $(`.slider-item:nth-child(${j})`).css("transform", `rotate(${deg}deg)`);
            deg = deg - (360/11);
        }

        $(`.content-selector:nth-child(${findex})`).fadeOut("slow");
        $(`.content-selector:nth-child(${index})`).fadeIn("slow");
        $(`.artboard-bg:nth-child(${findex})`).fadeOut("slow");
        $(`.artboard-bg:nth-child(${index})`).fadeIn("slow");
        $(`.asset-images:nth-child(${findex+11})`).fadeOut("slow");
        $(`.asset-images:nth-child(${index+11})`).fadeIn("slow");

        findex = index
    });


</script>
@endsection
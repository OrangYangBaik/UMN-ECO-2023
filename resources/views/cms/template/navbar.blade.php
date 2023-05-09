<nav class="navbar navbar-expand-md navbar-fixed-top p-3">
    <div class="container-fluid container justify-content-centre">
        <a href="{{ route('about-us') }}">
            <img src="{{ asset('images/umn-eco-logo.png')}}" class="navbar-blue-logo">
        </a>
        <!-- <img src="{{ asset('images/BlueLogo.png')}}" class="navbar-blue-logo"> -->
        <!-- <h6 class="hashtag">#BeholdTheUnderSea</h4> -->
        <button class="navbar-toggler" type="button">
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
            <div class="col-2 nav-item">
                <a href="{{ route('about-us') }}"><img class="w-25" src="{{ asset('images/umn-eco-logo.png')}}" ></a>
                
            </div>
            <ul class="navbar-nav col-10">
                <div class="nav-item-container mx-auto w-100 row justify-content-end">
                    <li class="nav-item col-2 text-end">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    {{-- <li class="nav-item col-2 text-end">
                        <a class="nav-link" href="{{ route('home') }}">About Us</a>
                    </li> --}}
                    <li class="nav-item col-3 text-center">
                        <a class="nav-link" href="{{ route('eco-fam') }}">ECO Family</a>
                    </li>
                    <li class="nav-item col-2 text-end">
                        <a class="nav-link" href="{{ route('our-team') }}">Our Team</a>
                    </li>
                    
                    {{-- @if(Auth::guard('downpour')->user()) --}}
                    {{-- <li class="nav-item dropdown col-2 text-end">
                        //<?php $array = explode(' ',Auth::guard('downpour')->user()->name, 2) ?>
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{ $array[0] }}</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('pendaftaranDownpour') }}" style="padding-right:10px;">Pendaftaran</a></li>
                          <li>
                            @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_1') === null) 
                              <div class="dropdown-item button-go-to-stamp-not-registered" style="padding-right:10px; cursor: pointer;">Stamp</div>
                            @else
                                <a class="dropdown-item" href="{{ route('ticketDownpour') }}" style="padding-right:10px;">Stamp</a>
                            @endif
                          </li>
                          <li><a class="dropdown-item" href="{{ route('logoutDownpour') }}" style="padding-right:10px;">Logout</a></li>
                        </ul>
                      </li> --}}
                    {{-- @else --}}
                        {{-- <li class="nav-item col-2 text-end">
                            <a class="nav-link" href="{{ route('loginDownpour') }}">Login</a>
                        </li> --}}
                    {{-- @endif --}}
                </div>
            </ul>
        </div>
    </div>
</nav>


<input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
<div class="toggler-container mt-1">
</div>
<label for="main-navigation-toggle">
    <span class="navigation-toggle-span">
    </span>
</label>
<nav id="main-navigation" class="nav-main">
    <ul class="menu">
        <li class="menu__item">
            <a class="menu__link"  href="{{ route('about-us') }}">Home</a>
        </li>
        {{-- <li class="menu__item">
            <a class="menu__link" href="{{ route('home') }}">About Us</a>
        </li> --}}
        <li class="menu__item">
            <a class="menu__link" href="{{ route('eco-fam') }}">ECO Family</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('our-team') }}">Our Team</a>
        </li>
        {{-- @if(Auth::guard('downpour')->user()) --}}
        {{-- <li class="menu__item">
            <a class="menu__link" href="{{ route('pendaftaranDownpour') }}">Pendaftaran</a>
        </li> --}}
        {{-- <li class="menu__item">
            @if(DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_1') === null) 
              <div class="menu__link button-go-to-stamp-not-registered" style="cursor: pointer;">Stamp</div>
            @else
                <a class="menu__link" href="{{ route('ticketDownpour') }}">Stamp</a>
            @endif
        </li> --}}
        {{-- <li class="menu__item">
            <a class="menu__link" href="{{ route('logoutDownpour') }}">Logout</a>
        </li> --}}
        {{-- @else --}}
        {{-- <li class="menu__item"> --}}
            {{-- <a class="menu__link" href="#" style="color:#999999"  data-bs-toggle="tooltip" data-bs-placement="right" title="Open at 26 Oktober">Login</a> --}}
            {{-- <a class="menu__link" href="{{ route('loginDownpour') }}">Login</a> --}}
        {{-- </li> --}}
        {{-- @endif --}}
    </ul>
</nav>
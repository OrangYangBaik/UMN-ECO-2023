<nav class="navbar navbar-expand-md navbar-fixed-top p-3">
    <div class="container-fluid justify-content-centre container">
        <a href="{{ route('landing') }}">
            <img src="{{ asset('images/umn-eco-logo.png') }}" class="navbar-blue-logo">
        </a>
        <!-- <img src="{{ asset('images/BlueLogo.png') }}" class="navbar-blue-logo"> -->
        <!-- <h6 class="hashtag">#BeholdTheUnderSea</h4> -->
        <button class="navbar-toggler" type="button">
        </button>
        <div class="navbar-collapse justify-content-around collapse" id="navbarNav">
            <div class="col-2 nav-item">
                <a href="{{ route('landing') }}"><img class="w-25" src="{{ asset('images/umn-eco-logo.png') }}"></a>

            </div>
            <ul class="navbar-nav col-10">
                <div class="nav-item-container w-100 row justify-content-end mx-auto">
                    <li class="nav-item col-2 text-end">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item col-3 text-center">
                        <a class="nav-link" href="{{ route('eco-fam') }}">ECO Family</a>
                    </li>
                    <li class="nav-item col-2 text-end">
                        <a class="nav-link" href="{{ route('our-team') }}">Our Team</a>
                    </li>

                    @if (Auth::guard('participant')->user())
                        <li class="nav-item dropdown col-2 text-end">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false"> {{ Auth::guard('participant')->user()->nama }}</a>
                            <ul class="dropdown-menu">
                                {{-- <li>
                                    <a class="dropdown-item" href="{{ route('pendaftaranDownpour') }}"
                                        style="padding-right:10px;">Pendaftaran</a>
                                </li>
                                <li>
                                    @if (DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_1') === null)
                                        <div class="dropdown-item button-go-to-stamp-not-registered"
                                            style="padding-right:10px; cursor: pointer;">Stamp</div>
                                    @else
                                        <a class="dropdown-item" href="{{ route('ticketDownpour') }}"
                                            style="padding-right:10px;">Stamp</a>
                                    @endif
                                </li> --}}
                                <li>
                                    <a class="dropdown-item" href="{{ route('logoutUser') }}"
                                        style="padding-right:10px;">Logout</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item col-2 text-end">
                            <a class="nav-link" href="{{ route('loginUser') }}">Login</a>
                        </li>
                    @endif
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
            <a class="menu__link" href="{{ route('landing') }}">Home</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('eco-fam') }}">ECO Family</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('our-team') }}">Our Team</a>
        </li>
        @if (Auth::guard('participant')->user())
            <li class="menu__item">
                <a class="menu__link" href="">
                    {{ Auth::guard('participant')->user()->nama }}</a>
            </li>
            {{-- <li class="menu__item">
                @if (DB::table('downpour_users')->where('id', Auth::guard('downpour')->id())->value('activity_booth_1') === null)
                    <div class="menu__link button-go-to-stamp-not-registered" style="cursor: pointer;">Stamp</div>
                @else
                    <a class="menu__link" href="{{ route('ticketDownpour') }}">Stamp</a>
                @endif
            </li> --}}
            <li class="menu__item">
                <a class="menu__link" href="{{ route('logoutUser') }}">Logout</a>
            </li>
        @else
            <li class="menu__item">
                <a class="menu__link" href="{{ route('loginUser') }}">Login</a>
            </li>
        @endif
    </ul>
</nav>

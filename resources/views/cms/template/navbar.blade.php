{{-- Desktop --}}
<nav class="navbar navbar-expand-md navbar-fixed-top py-3">
    <div class="container-fluid justify-content-between">
        <a href="{{ route('homepage') }}">
            <img src="{{ asset('images/umn-eco-logo.png') }}" class="navbar-blue-logo">
        </a>
        <button class="navbar-toggler" type="button">
        </button>
        <div class="navbar-collapse justify-content-around collapse" id="navbarNav">
            <div class="nav-item">
                <a href="{{ route('homepage') }}">
                    <img class="w-25" src="{{ asset('images/umn-eco-logo.png') }}">
                </a>
            </div>
            <ul class="navbar-nav col-10">
                <div class="nav-item-container w-100 row justify-content-end mx-auto">
                    <li class="nav-item col-auto text-center">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item col-auto text-center">
                        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item col-auto text-center">
                        <a class="nav-link" href="{{ route('eco-fam') }}">ECO Family</a>
                    </li>
                    <li class="nav-item col-auto text-center">
                        <a class="nav-link" href="{{ route('our-team') }}">Our Team</a>
                    </li>
                    <li class="nav-item col-auto text-center">
                        <a class="nav-link" href="{{ route('milestone') }}">Milestone</a>
                    </li>

                    @if (Auth::guard('participant')->user())
                        <li class="nav-item dropdown col-auto text-center">
                            <?php $array = explode(' ', Auth::guard('participant')->user()->nama, 2); ?>
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false"> {{ $array[0] }}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item col-auto text-center">
                                    <form id="logout-form" action="{{ route('logoutUser') }}" method="post"
                                        style="display: none;">
                                        @csrf

                                    </form>
                                    <a class="logout-button nav-link text-white"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item col-auto text-center">
                            <a class="nav-link" href="{{ route('loginUser') }}">Login</a>
                        </li>
                    @endif
                </div>
            </ul>
        </div>
    </div>
</nav>

{{-- Mobile --}}
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
            <a class="menu__link" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('about-us') }}">About Us</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('eco-fam') }}">ECO Family</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('our-team') }}">Our Team</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('milestone') }}">Milestone</a>
        </li>

        @if (Auth::guard('participant')->user())
            <li class="menu__item">
                <a class="menu__link" href="">
                    {{ Auth::guard('participant')->user()->nama }}</a>
            </li>
            <li class="menu__item">
                <form id="logout-form" action="{{ route('logoutUser') }}" method="post">
                    @csrf
                    <button type="submit" class="menu__link"
                        style="border: none; background: none; cursor: pointer;">Logout</button>
                </form>
            </li>
        @else
            <li class="menu__item">
                <a class="menu__link" href="{{ route('loginUser') }}">Login</a>
            </li>
        @endif
    </ul>
</nav>

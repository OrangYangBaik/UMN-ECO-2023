<nav class="navbar navbar-expand-md navbar-fixed-top">
    <div class="container-fluid justify-content-centre">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/BlueLogo.png')}}" class="navbar-blue-logo">
        </a>
        <!-- <img src="{{ asset('images/BlueLogo.png')}}" class="navbar-blue-logo"> -->
        <h6 class="hashtag">#BeholdTheUnderSea</h4>
        <button class="navbar-toggler" type="button">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav col-12">
                <div class="nav-item-container mx-auto w-100 row">
                    <li class="nav-item col-6">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-6">
                        <a class="nav-link" href="{{ route('ourteam') }}">Our Team</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>


<input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
<div class="toggler-container">
</div>
<label for="main-navigation-toggle">
    <span class="navigation-toggle-span">
    </span>
</label>
<nav id="main-navigation" class="nav-main">
    <ul class="menu">
        <li class="menu__item">
            <a class="menu__link" href="{{ route('home') }}"> Home</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('ourteam') }}">Our Team</a>
        </li>
    </ul>
</nav>

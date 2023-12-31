<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UMN ECO My Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                @php
                                    $adminName = auth()->user()->name;
                                    // Use a regex pattern to extract only letters from the admin's name
preg_match('/Admin([A-Za-z]+)/', $adminName, $matches);
$dashboardUrl = '/admin/dashboard' . (isset($matches[1]) ? $matches[1] : '');
                                @endphp

                                <a href="{{ $dashboardUrl }}" class="dropdown-item">Dashboard</a>
                            </li>
                            <li>
                                <a href="/admin/setting" class="dropdown-item">Setting</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logoutAdmin" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <header>

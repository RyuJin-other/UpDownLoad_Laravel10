<!-- place navbar here -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://icons.getbootstrap.com/assets/img/icons-hero.png" alt="Logo" width="30"
                        height="24" class="d-inline-block align-text-top">
                    Project
                </a>
            </div>
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="/dashboard" class="nav-link {{ ($title === 'Dashboard') ? 'active' : '' }}">Dashboard</a>
                {{-- <a class="nav-link {{ ($title === 'Input Data') ? 'active' : '' }}" href="/">Input File</a>
                <a class="nav-link {{ ($title === 'Table Data') ? 'active' : '' }}" href="/index">Data File</a> --}}
                {{-- <a class="nav-link {{ ($title === 'Login') ? 'active' : '' }}" href="#">Login</a> --}}
                <!-- <a class="nav-link disabled">Disabled</a> -->
            </div>


            <div class="navbar-nav ms-auto ">
                @auth

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hai, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        {{-- <li><a class="dropdown-item" href="#"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
                        </li> --}}
                        <a class="dropdown-item nav-link {{ ($title === 'Input Data') ? 'active' : '' }}" href="/">Input
                            File</a>
                        <a class="dropdown-item nav-link {{ ($title === 'Table Data') ? 'active' : '' }}"
                            href="/index">Data File</a>
                        {{-- <li><a class="dropdown-item" href="#">Dashboard</a></li> --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-unlock-fill">
                                </i> LogOut</button>
                            </form>
                        </li>
                    </ul>
                </div>

                @else

                <a class="nav-link {{ ($title === 'Login') ? 'active' : '' }}" href="/"><i
                        class="bi bi-lock-fill"></i> Login</a>

                @endauth
                {{-- <a class="nav-link {{ ($title === 'Registered') ? 'active' : '' }}" href="/registered"><i
                        class="bi bi-unlock"></i>Register</a> --}}
            </div>
        </div>
    </div>
</nav>
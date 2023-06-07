<!-- place navbar here -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://icons.getbootstrap.com/assets/img/icons-hero.png" alt="Logo" width="30"
                        height="24" class="d-inline-block align-text-top">
                    Project
                </a>
            </div>
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($title === 'Input Data') ? 'active' : '' }}" href="/">Input File</a>
                <a class="nav-link {{ ($title === 'Table Data') ? 'active' : '' }}" href="/index">Data File</a>
                <!-- <a class="nav-link disabled">Disabled</a> -->
            </div>
        </div>
    </div>
</nav>
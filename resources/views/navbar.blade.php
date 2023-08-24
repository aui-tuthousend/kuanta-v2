@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/home">KUANTA</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href='{{route('profile', \Illuminate\Support\Facades\Auth::user()->id)}}'>Profile</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        KPI's
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/allkpis">All KPI's</a>
                        <a class="dropdown-item" href='{{route('kpisrole', \Illuminate\Support\Facades\Auth::user()->role)}}'>KPI's Role</a>
                    </div>
                </li>
            </ul>
            <span class="nav-item me-2">
                <a class='nav-link' href="/logout">logout</a>
            </span>
        </div>
    </div>
</nav>

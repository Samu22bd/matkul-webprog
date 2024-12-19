<div class='row'>
    <div class='col-12'>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('mahasiswa.index')}}">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li>
                        <a class="btn btn-primary" href="{{ route('set-locale', 'en') }}">English</a> |
                        <a class="btn btn-primary" href="{{ route('set-locale', 'id') }}">Indonesia</a>
                    </li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

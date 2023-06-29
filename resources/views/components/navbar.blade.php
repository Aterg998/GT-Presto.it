<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container row">
        <div class="container accenti col">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse nav-text">
                <ul class="navbar-nav">
                    <li class="nav-item mx-4">
                        <a class="accenti mx-2 presto fs-2" href="{{ Route('homepage') }}">Presto.it</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="{{ Route('ads.index') }}">Annunci</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bolder" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item" href="{{ Route('ads.index') }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                            {{--  dobbiamo inserire il filtro delle categorie nella route --}}
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        
        <div class="d-flex justify-content-end col align-items-center">
            @auth
            <span class="mx-3">Ciao, {{Auth::user()->name}}</span>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-dark" onclick="event.preventDefault(); this.closest('form').submit();">Logout</button>
            </form>
                @else
                <a class="btn accenti mx-1" href='{{Route('login')}}'>Accedi</a>
                <a class="btn accenti mx-1" href='{{Route('register')}}'>Registrati</a>
            @endauth
        </div>
    </div>
</nav>

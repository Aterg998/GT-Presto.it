<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid accenti">
      <a class=" accenti mx-2 presto fs-2" href="{{Route('homepage')}}">Presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-text">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="{{Route('ads.index')}}">Annunci</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu">
              @foreach ( $categories as $category )
              <li><a class="dropdown-item" href="{{Route('ads.index')}}">{{$category->name}}</a></li>
              @endforeach
             {{--  dobbiamo inserire il filtro delle categorie nella route --}}
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{route('dashboard.index')}}"><img src="{{asset('image/')}}/Lumos.png" alt="" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <form class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('dashboard.index')}}">Dahsboard</a></li>
              <li><a class="dropdown-item" href="{{route('kamar.index')}}">Tabel Kamar</a></li>
              <li><a class="dropdown-item" href="{{route('fasilitaskamar.index')}}">Tabel Fasilitas Kamar</a></li>
              <li><a class="dropdown-item" href="{{route('fasilitashotel.index')}}">Tabel Fasilitas Hotel</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            </ul>
          </li>
        </ul>
      </form>
    </div>
  </div>
</nav>
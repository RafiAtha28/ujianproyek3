<nav class="navbar navbar-expand-lg bg-nav">
    <div class="container-fluid mt-2 mb-2 ms-2">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link f-nav ms-3" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link f-nav ms-3" href="{{ route('barang') }}">Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link f-nav ms-3" href="{{ route('kasir') }}">Kasir</a>
          </li>

          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle f-putih" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
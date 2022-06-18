<!doctype html>
<html lang="en">
  <head>
    <title>UAS @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  </head>

  <body style="background-color:rgb(27, 18, 41)">
    <body class="dark-edition">
      <div class="container-fluid">
          <div class="row">
            {{-- SideBar --}}
              <div class="col-2">
                  <div class="d-flex flex-column flex-shrink-0 p-3 text-white ">
                      <a href="/" class="text-center">
                        <img src="https://www.ukdw.ac.id/wp-content/uploads/2017/10/logo-ukdw.png" width="55" height="70" alt="">
                      </a>
                      <hr>
                      <ul class="nav flex-column nav-pills">
                        <li class="nav-item">
                          <a href="/home" class="nav-link {{ ($title == 'Home') ? 'active' : ''}} text-white">
                            Home
                          </a>
                        </li>
                        <li>
                          <a href="/mahasiswa" class="nav-link {{ ($title == 'Mahasiswa') ? 'active' : ''}} text-white">
                            Mahasiswa
                          </a>
                        </li>
                        <li>
                          <a href="#" class="nav-link text-white">
                            Dosen
                          </a>
                        </li>
                        <li>
                          <a href="#" class="nav-link text-white">
                            Skripsi
                          </a>
                        </li>
                      </ul>
                      <hr>
                    </div>
              </div>
              
              {{-- Navbar --}}
              <div class="col-10">
                  <div class="navbar mb-4 mt-3" style="background-color:rgb(59, 39, 90)">
                    <h3 class="navbar-brand text-white">Selamat Datang {{ Auth::user()->nama_user }}</h3>
                    <div class="nav-item text-center">
                      <div class="dropdown float-right">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="true">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right mt-2" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="/user">Data User</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/logout">Log Out</a>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  {{-- content --}}
                  @if (session('alert-tambah'))
                    <div class="alert alert-success alert-dis,issable fade show" role="alert">
                      <strong>{{ session('alert-tambah') }}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="bi bi-check2-square"></i></span>
                      </button>
                    </div>
                  @elseif (session('alert-update'))
                    <div class="alert alert-warning alert-dis,issable fade show" role="alert">
                      <strong>{{ session('alert-update') }}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="bi bi-check2-square"></i></span>
                      </button>
                    </div>
                  @elseif (session('alert-hapus'))
                    <div class="alert alert-danger alert-dis,issable fade show" role="alert">
                      <strong>{{ session('alert-hapus') }}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="bi bi-check2-square"></i></span>
                      </button>
                    </div>
                  @endif
                  @yield('content')
              </div>
          </div>
      </div>
  </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
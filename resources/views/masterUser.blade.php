<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('/css/style.css')}}">


  <!-- FONT GOOGLE -->
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/app.css') }}">  -->

  <title>@yield('title')</title>
</head>

<body>

  <div class="row">
    <div class="col-sm-12">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #222A35;">
        <div class="container">
          <a class="navbar-brand" href="{{url('/siswa')}}">Ruang Baca </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-nav ml-auto">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="dropdown">
                <button class="btn btn-light btn-modif btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{{ Auth::user()->name }}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{url('/pinjam')}}">Peminjaman</a>
                  <a class="dropdown-item" href="{{url('/koleksibuku')}}">Koleksi Buku</a>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>{{ __(' Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
                <!-- <a class="nav-item nav-link" href="{{url('/blog')}}">Blog</a> -->
                <!-- <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Register</button>
                    <input class="form-control ml-sm-2" type="email" placeholder="Masukkan emailmu!">
                  </form> -->
              </div>
            </div>
          </div>
      </nav>
    </div>
  </div>



  <!-- END BAGIAN NAVBAR -->


  <!-- BAGIAN KONTEN/ISI -->
  <div class="container">
    @yield('content')
  </div>

  <!-- BAGIAN FOOTER -->
  <footer class="copyright">
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p>Dibuat dengan Senang Hati &copy Bambang & Akmal 2020. Allright reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END BAGIAN FOOTER -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- Data Table -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable();
    });
  </script>
  <script>
    $('#datatable').DataTable({
      buttons: [{
        extend: 'pdf',
        text: 'Save current page',
        exportOptions: {
          modifier: {
            page: 'current'
          }
        }
      }]
    });
  </script>
</body>

</html>
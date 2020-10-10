<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/app.css') }}">  -->

    <title>@yield('title')</title>
  </head>
  <body>
    

    <!-- BAGIAN NAVBAR -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BamAkmal-RuBa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
              <a class="nav-link" href="{{ url('/buku') }}">Buku</a>
              <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Masukkan nama buku">
            <button class="btn btn-warning my-2 my-sm-0" type="submit">Cari Buku</button>
          </form>
        </div>
      </nav>
    </div>
    <!-- END BAGIAN NAVBAR -->


    <!-- BAGIAN KONTEN/ISI -->
    <div class="container">
        @yield('content')
    </div>

    <!-- BAGIAN FOOTER -->
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <p>Dibuat dengan Senang Hati &copy Bambang & Akmal 2020. Allright reserved</p>
            </div>
        </div>
    </div>
    <!-- END BAGIAN FOOTER -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
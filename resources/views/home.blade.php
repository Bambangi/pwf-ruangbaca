@extends('master')

@section('title', 'Selamat datang di Ruang Baca')

<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h2>Halo, Selamat datang di Ruang Baca!</h2>
      <p class="lead">Iqra' "bacalah" karena sesungguhnya Allah akan memuliakan orang berilmu.</p>
      <a href="#" class="btn btn-outline-light btn-lg mt-3">Baik, Aku Mau Pinjam Buku!</a>
    </div>
  </div>

@section('content')

  <!-- BAGIAN ABOUT US -->
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="https://images.unsplash.com/photo-1522211988038-6fcbb8c12c7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="img-thumbnail gambar-thumbnail">
        </div>

        <div class="col-lg-6">
        <h2 class="mb-3 judul-section">Pengenalan Ruang Baca</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia eveniet inventore deserunt iusto sequi, tenetur ex perspiciatis beatae officiis eos, neque alias commodi veritatis. Rem sequi labore laboriosam esse est!. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda fugiat maiores quisquam ex sapiente voluptates exercitationem nihil? Dolorem doloribus, fugiat fuga nam ullam et placeat laudantium optio facilis totam cumque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam tempore blanditiis error, a possimus officiis laudantium itaque quasi enim asperiores porro consequatur autem atque fugiat quam, id harum voluptatibus. Aut!</p>
        </div>
      </div>
    </div>

  </section>


  <!-- <section class="quote">
    <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <div class="card quote">
        <div class="card-header">Nama quote</div>
          <div class="card-body">
            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
    </div>
    </div>
  </section> -->

  <!-- <section class="benefit">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h2 class="judul-section">Keuntungan jika Kamu Mau Baca:</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <img src="" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Menambah ilmu</h5>
              <p class="card-text">Mutlak yang kamu dapatkan jika kamu mau meluangkan membaca kalau ini.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->


@endsection

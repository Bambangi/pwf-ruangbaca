@extends('masterUser')

@section('title', 'Selamat datang di Ruang Baca')

<div class="jumbotron jumbotron-section jumbotron-fluid jumbotron-buku text-center">
  <div class="container-jumbotron">
    <h2>Halo {{{ Auth::user()->name }}}, Selamat datang di Ruang Baca!</h2>
    <p class="lead">Iqra' "bacalah" karena sesungguhnya Allah akan memuliakan orang berilmu.</p>
    <a href="{{url('/koleksibuku')}}" class="btn btn-outline-light btn-lg mt-3">Baik, Aku Mau Pinjam Buku!</a>
  </div>
</div>

@section('content')

<!-- BAGIAN ABOUT US -->
<section class="about section-awal">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1476275466078-4007374efbbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="img-thumbnail gambar-thumbnail">
      </div>

      <div class="col-lg-6">
        <h2 class="judul-section">Pengenalan Ruang Baca</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia eveniet inventore deserunt iusto sequi, tenetur ex perspiciatis beatae officiis eos, neque alias commodi veritatis. Rem sequi labore laboriosam esse est!. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda fugiat maiores quisquam ex sapiente voluptates exercitationem nihil? Dolorem doloribus, fugiat fuga nam ullam et placeat laudantium optio facilis totam cumque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam tempore blanditiis error, a possimus officiis laudantium itaque quasi enim asperiores porro consequatur autem atque fugiat quam, id harum voluptatibus. Aut!</p>
      </div>
    </div>
  </div>

</section>


<!-- BAGIAN BENEFIT -->
<section class="benefit">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="judul-section">Keuntungan jika Kamu Mau Baca:</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card">
          <img src="/img/benefit-1.jpg" alt="menambah-ilmu" class="card-img-top img-benefit">
          <div class="card-body">
            <h5 class="card-title">Menambah ilmu</h5>
            <p class="card-text">Mutlak yang kamu dapatkan jika kamu mau meluangkan membaca kalau ini mah!</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card">
          <img src="/img/benefit-2.jpg" alt="mendapat-pahala" class="card-img-top img-benefit">
          <div class="card-body">
            <h5 class="card-title">Mendapatkan pahala</h5>
            <p class="card-text">Tak cuma ilmu, pahala pun akan kamu dapatkan. Jadi tunggu apalagi ? Ayo ke Ruang Baca yah!</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card">
          <img src="/img/benefit-3.jpg" alt="memperoleh-teman-baru" class="card-img-top img-benefit">
          <div class="card-body">
            <h5 class="card-title">Memperoleh teman baru</h5>
            <p class="card-text">Bosan baca di rumah sendirian ? weits.. tenang, kan ada Ruang Baca. Bisa jadi kamu akan memperoleh teman baru disana.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
















@endsection
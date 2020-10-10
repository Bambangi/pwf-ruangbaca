@extends('master')

@section('title', 'Berbagi Buku')

@section('content')
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1>Donasi Buku</h1>
            <p class="lead">Raih kebaikan dengan donasi buku, guna melestarikan komunitas membaca semakin merata!</p>
        </div>
    </div>

    <form>
        <h2>Inputkan Data Buku</h2>
        <div class="col-8">
            <div class="form-group">
                <label for="judul-buku">Judul buku</label>
                <input type="text" class="form-control" id="judul-buku" placeholder="Masukkan judul buku"> 
            </div>

            <div class="form-group">
                <label for="penulis-buku">Penulis buku</label>
                <input type="text" class="form-control" id="penulis-buku" placeholder="masukkan nama penulis buku">
            </div>

            <div class="form-group">
                <label for="penerbit-buku">Penerbit buku</label>
                <input type="text" class="form-control" id="penerbit-buku" placeholder="masukkan penerbit">
            </div>

            <div class="form-group">
                <label for="tahun-terbit">Tahun terbit</label>
                <input type="text" class="form-control" id="tahun-terbit" placeholder="masukkan tahun terbit">
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </form>
@endsection
@extends('master')

@section('title', 'Form Tambah Data Buku')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Buku Baru</h1>

                <form action="/buku" method="post">
                    
                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    @csrf
                    <div class="form-group">
                        <label for="judul-buku">Judul buku</label>
                        <input type="text" class="form-control" id="judul-buku" placeholder="masukkan judul buku" name="judul-buku">
                    </div>

                    <div class="form-group">
                        <label for="penulis-buku">Penulis buku</label>
                        <input type="text" class="form-control" id="penulis-buku" placeholder="masukkan penulis buku" name="penulis-buku">
                    </div>

                    <div class="form-group">
                        <label for="penerbit-buku">Penerbit buku</label>
                        <input type="text" class="form-control" id="penerbit-buku" placeholder="masukkan penerbit buku" name="penerbit-buku">
                    </div>

                    <div class="form-group">
                        <label for="tahun-terbit">Tahun terbit</label>
                        <input type="text" class="form-control" id="tahun-terbit" placeholder="masukkan tahun terbit" name="tahun-terbit">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
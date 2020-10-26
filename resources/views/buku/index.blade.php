@extends('master')

@section('title', 'Buku')

    <div class="jumbotron jumbotron-section jumbotron-fluid jumbotron-buku text-center">
        <div class="container-jumbotron">
            <h1>Donasi Buku</h1>
            <p class="lead">Raih kebaikan dengan donasi buku, guna melestarikan komunitas membaca semakin merata!</p>
            <a href="#daftar-buku" class="btn btn-outline-light btn-lg">Oke, Saya Mau Sumbang Buku nih!</a>
        </div>
    </div>

@section('content')

    <section id="daftar-buku">
        <div class="container">
            <h2 class="judul-section text-center">Daftar Buku</h2>
            <hr>
            
            <a href="/buku/create" class="btn btn-primary my-3">Tambahkan Buku Baru</a>
        
            @if (session('status tambah buku berhasil'))
                <div class="alert alert-success">
                    {{ session('status tambah buku berhasil') }}
                </div>
            @endif

            @if (session('status edit berhasil'))
                <div class="alert alert-warning">
                    {{ session('status edit berhasil') }}
                </div>
            @endif

            @if(session('status hapus berhasil'))
                <div class="alert alert-danger">
                    {{ session('status hapus berhasil') }}
                </div>
            @endif

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis Buku</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>

                <tbody>
                @foreach( $buku as $b )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $b->judul_buku }}</td>
                        <td>{{ $b->penulis_buku }}</td>
                        <td>{{ $b->penerbit_buku }}</td>
                        <td>{{ $b->tahun_terbit }}</td>
                        <td>
                        <a href="/buku/{{ $b->id }}" class="badge badge-warning">Detail</a>
                        <a href="/buku/edit/{{ $b->id }}" class="badge badge-success">Edit</a>
                        <a href="/buku/delete/{{ $b->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
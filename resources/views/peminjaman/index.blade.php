@extends('master')

@section('title', 'Peminjaman')

    <div class="jumbotron jumbotron-section jumbotron-fluid jumbotron-anggota text-center">
        <div class="container-jumbotron">
            <h1>Peminjaman Ruang Baca</h1>
            <p class="lead">Meminjam buku di Ruang Baca semakin mudah dengan hanya beberapa langkah mudah!</p>
            <a href="#daftar-anggota" class="btn btn-outline-light btn-lg mt-3">Pinjam Buku Sekarang!</a>
        </div>
    </div>

@section('content')

    <section id="daftar-anggota">
        <div class="container">
            <h2 class="judul-section text-center">Daftar Peminjaman</h2>
            <hr>
            
            <a href="/peminjaman/create" class="btn btn-primary my-3">Tambahkan Peminjaman Baru</a>
        
            @if (session('status tambah peminjaman berhasil'))
                <div class="alert alert-success">
                    {{ session('status tambah peminjaman berhasil') }}
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
                        <th scope="col">Peminjam</th>
                        <th scope="col">Buku</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>

                <tbody>
                
                @foreach( $peminjaman as $p )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->anggota->nama_anggota }}</td>
                        <td>{{ $p->buku->judul_buku }}</td>
                        <td>{{ $p->nama_petugas }}</td>
                        <td>{{ $p->tgl_pinjam }}</td>
                        <td>
                        <a href="/peminjaman/{{ $p->id }}" class="badge badge-warning">Detail</a>
                        <a href="/peminjaman/edit/{{ $p->id }}" class="badge badge-success">Edit</a>
                        <a href="/peminjaman/delete/{{ $p->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
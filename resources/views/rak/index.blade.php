@extends('master')

@section('title', 'Rak')

    <div class="jumbotron jumbotron-section jumbotron-fluid jumbotron-anggota text-center">
        <div class="container-jumbotron">
            <h1>Rak Ruang Baca</h1>
            <p class="lead">Susah cari buku? lebih mudah jika cari nama raknya disini!</p>
            <a href="#daftar-rak" class="btn btn-outline-light btn-lg mt-3">Lihat Daftar Rak!</a>
        </div>
    </div>

@section('content')

    <section id="daftar-rak">
        <div class="container">
            <h2 class="judul-section text-center">Daftar Rak</h2>
            <hr>
            
            <a href="/rak/create" class="btn btn-primary my-3">Tambahkan Rak Baru</a>
        
            @if (session('status tambah anggota berhasil'))
                <div class="alert alert-success">
                    {{ session('status tambah anggota berhasil') }}
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
                        <th scope="col">Nama Rak</th>
                        <th scope="col">Lokasi Rak</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>

                <tbody>
                @foreach( $rak as $r )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $r->nama_rak }}</td>
                        <td>{{ $r->lokasi_rak }}</td>
                        <td>
                        <a href="/rak/{{ $r->id }}" class="badge badge-warning">Detail</a>
                        <a href="/rak/edit/{{ $r->id }}" class="badge badge-success">Edit</a>
                        <a href="/rak/delete/{{ $r->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
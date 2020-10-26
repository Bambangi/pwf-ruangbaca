@extends('master')

@section('title', 'Petugas')

    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1>Petugas Perpustakaan</h1>
            <p class="lead">Raih kebaikan dengan donasi buku, guna melestarikan komunitas membaca semakin merata!</p>
        </div>
    </div>

@section('content')

    <section>
        <div class="container">
            <h2 class="judul-section text-center">Daftar Petugas</h2>
            <hr>
            
            <a href="/petugas/create" class="btn btn-primary my-3">Tambahkan Petugas Baru</a>
        
            @if (session('status tambah berhasil'))
                <div class="alert alert-success">
                    {{ session('status tambah berhasil') }}
                </div>
            @endif

            @if (session('status edit berhasil'))
                <!-- <div class="alert alert-primary">
                    {{ session('$buku->id') }}
                </div> -->

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
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Alamat Petugas</th>
                        <th scope="col">Nomor Telfon Petugas</th>
                        <th scope="col">Jenis Kelamin Petugas</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>

                <tbody>
                @foreach( $petugas as $p )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->nama_petugas }}</td>
                        <td>{{ $p->alamat_petugas }}</td>
                        <td>{{ $p->telfon_petugas }}</td>
                        <td>{{ $p->jk_petugas }}</td>
                        <td>
                        <a href="/petugas/{{ $p->id_petugas }}" class="badge badge-warning">Detail</a>
                        <a href="/petugas/edit/{{ $p->id_petugas }}" class="badge badge-success">Edit</a>
                        <a href="/petugas/delete/{{ $p->id_petugas }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
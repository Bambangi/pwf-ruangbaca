@extends('master')

@section('title', 'Anggota')

    <div class="jumbotron jumbotron-section jumbotron-fluid jumbotron-anggota text-center">
        <div class="container-jumbotron">
            <h1>Anggota Ruang Baca</h1>
            <p class="lead">Ruang Baca sangat cocok kamu jadikan tempat singgah membaca dengan mendaftar keanggotaan!</p>
            <a href="#daftar-anggota" class="btn btn-outline-light btn-lg mt-3">Daftar Keanggotaan Sekarang!</a>
        </div>
    </div>

@section('content')

    <section id="daftar-anggota">
        <div class="container">
            <h2 class="judul-section text-center">Daftar Anggota</h2>
            <hr>
            
            <a href="/anggota/create" class="btn btn-primary my-3">Tambahkan Anggota Baru</a>
        
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
                        <th scope="col">Nama Anggota</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>

                <tbody>
                @foreach( $anggota as $a )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $a->nama_anggota }}</td>
                        <td>{{ $a->jenis_kelamin }}</td>
                        <td>{{ $a->no_telepon }}</td>
                        <td>{{ $a->alamat }}</td>
                        <td>
                        <a href="/anggota/{{ $a->id }}" class="badge badge-warning">Detail</a>
                        <a href="/anggota/edit/{{ $a->id }}" class="badge badge-success">Edit</a>
                        <a href="/anggota/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
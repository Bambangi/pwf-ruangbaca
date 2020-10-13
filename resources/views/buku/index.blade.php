@extends('master')

@section('title', 'Buku')

@section('content')
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1>Donasi Buku</h1>
            <p class="lead">Raih kebaikan dengan donasi buku, guna melestarikan komunitas membaca semakin merata!</p>
        </div>
    </div>

    <a href="/buku/create" class="btn btn-primary my-3">Tambahkan Buku Baru</a>
    
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">judul_buku</th>
                <th scope="col">penulis_buku</th>
                <th scope="col">penerbit_buku</th>
                <th scope="col">tahun_terbit</th>
                <th scope="col">tindakan</th>
            </tr>
        </thead>

        <tbody>
        @foreach( $books as $book )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $book->judul_buku }}</td>
                <td>{{ $book->penulis_buku }}</td>
                <td>{{ $book->penerbit_buku }}</td>
                <td>{{ $book->tahun__terbit }}</td>
                <td>
                <a href="/buku/{{ $book->id }}" class="badge badge-warning">Detail</a>
                <a href="" class="badge badge-success">Edit</a>
                <a href="" class="badge badge-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
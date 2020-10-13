@extends('master')

@section('title', 'Buku')

@section('content')
    
    @foreach( $books as $book )
        <div class="card">
            <img src="" alt="" class="card-img-top">
            <div class="card-body">
            <h5>{{ $book-> judul_buku }}</h5>
            <h6>{{ $book-> penulis_buku }}</h6>
            <p>..</p>
            <a href="" class="btn btn-primary">Detail buku</a>
            </div>
        </div>
    @endforeach


@endsection
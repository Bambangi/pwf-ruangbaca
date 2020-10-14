@extends('master')

@section('title', 'Detail Buku')

@section('content')
    
    <div class="card mt-3  text-center" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{ $buku->judul_buku }}</h5>
            <h6 class="card-subtitle mb-2">Penulis: {{ $buku -> penulis_buku }}</h6>
            <p class="card-text">Diterbitkan: {{ $buku->penerbit_buku }}</p>
            <p class="card-text">Tahun terbit: {{ $buku->tahun_terbit }}</p>
 
            <a href="/buku/edit/{{ $buku->id }}" class="btn btn-warning">Edit</a>
            <a href="/buku/delete/{{ $buku->id }}" class="btn btn-danger">Hapus data</a>
            <a href="/buku" class="card-link">Kembali</a>
        </div>
    </div>

@endsection
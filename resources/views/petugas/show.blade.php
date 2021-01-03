@extends('masterAdmin')

@section('title', 'Detail Petugas')

@section('content')
    
    <section class="detail">
        <div class="card mt-3  text-center" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">{{ $petugas -> nama_petugas }}</h5>
                <h6 class="card-subtitle mb-2">Kelamin : {{ $petugas -> jk_petugas }}</h6>
                <p class="card-text">
                No. HP: {{ $petugas -> telfon_petugas }} <br>
                Alamat: {{ $petugas -> alamat_petugas }}
                </p>
    
                <a href="/petugas/edit/{{ $petugas->id_petugas }}" class="btn btn-warning">Edit</a>
                <a href="/petugas/delete/{{ $petugas->id_petugas }}" class="btn btn-danger">Hapus data</a>
                <a href="/petugas" class="card-link">Kembali</a>
            </div>
        </div>
    </section>

@endsection
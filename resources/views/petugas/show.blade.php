@extends('master')

@section('title', 'Detail Petugas')

@section('content')
    
    <section class="detail">
        <div class="card mt-3  text-center" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $petugas->nama_petugas }}</h5>
                <h6 class="card-subtitle mb-2">Alamat: {{ $petugas -> alamat_petugas }}</h6>
                <p class="card-text">Nomor Telfon: {{ $petugas->telfon_petugas }}</p>
    
                <a href="/petugas/edit/{{ $petugas->id }}" class="btn btn-warning">Edit</a>
                <a href="/petugas/delete/{{ $petugas->id }}" class="btn btn-danger">Hapus data</a>
                <a href="/petugas" class="card-link">Kembali</a>
            </div>
        </div>
    </section>

@endsection
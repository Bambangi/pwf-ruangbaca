@extends('masterAdmin')

@section('title', 'Detail Anggota')

@section('content')

    <section class="detail">
        <div class="card mt-3  text-center" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $rak -> nama_rak }}</h5>
                <h6 class="card-subtitle mb-2">Nama Rak : {{ $rak -> nama_rak }}</h6>
                <p class="card-text">Lokasi Rak : {{ $rak -> lokasi_rak }}</p>
                <a href="/rak/edit/{{ $rak->id }}" class="btn btn-warning">Edit</a>
                <a href="/rak/delete/{{ $rak->id }}" class="btn btn-danger">Hapus data</a>
                <a href="/rak" class="card-link">Kembali</a>
            </div>
        </div>
    </section>

@endsection
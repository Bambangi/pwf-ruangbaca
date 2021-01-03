@extends('masterAdmin')

@section('title', 'Detail Anggota')

@section('content')

<section class="detail">


        <div class="card mt-3  text-center" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $anggota -> nama_anggota }}</h5>
                <h6 class="card-subtitle mb-2">Kelamin : {{ $anggota -> jk_anggota }}</h6>
                <p class="card-text">
                No. HP: {{ $anggota -> telfon_anggota }} <br>
                Alamat: {{ $anggota -> alamat_anggota }}
                </p>
    
                <a href="/anggota/edit/{{ $anggota->id_anggota }}" class="btn btn-warning">Edit</a>
                <a href="/anggota/delete/{{ $anggota->id_anggota }}" class="btn btn-danger">Hapus data</a>
                <a href="/anggota" class="card-link">Kembali</a>
            </div>
        </div>


        

</section>

@endsection
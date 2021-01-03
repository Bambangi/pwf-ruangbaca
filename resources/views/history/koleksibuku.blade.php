@extends('masterUser')

@section('title', 'Koleksi Buku')

<div class="jumbotron jumbotron-section jumbotron-fluid jumbotron-buku text-center">
    <div class="container-jumbotron">
        <h1>Koleksi Buku</h1>
        <p class="lead">Dapatkan buku terbaik dan dapat dibaca hanya di Ruang baca!</p>
    </div>
</div>

@section('content')

<section id="daftar-buku">
    <div class="container">
        <h2 class="judul-section text-center">Koleksi Buku</h2>
        <hr>

        @if(session('status pinjam buku berhasil'))
        <div class="alert alert-danger">
            {{ session('status pinjam buku berhasil') }}
        </div>
        @endif

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <form method="GET" action="/koleksibuku">
                        <input class="form-control" type="text" name="cari" placeholder="Search.." autocomplete="off">

                    </form>
                </div>
            </div>
            <div class="col-4">
                <button class="btn btn-dark" type="submit">Search</button>
                <a href="{{url('/koleksibuku')}}    " class="btn btn-primary" type="submit">Reset</a>
            </div>
        </div>

        <table class="table" id="datatable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis Buku</th>
                    <th scope="col">Penerbit Buku</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Stok Buku</th>
                    <th scope="col">Nama Rak</th>
                    <!-- <th scope="col">Tindakan</th> -->
                </tr>
            </thead>

            <tbody>
                @foreach( $buku as $b )
                <tr>
                    <td scope="row"> {{ $loop->iteration }} <br> </td>
                    <td> {{ $b->judul_buku }} <br> </td>
                    <td> {{ $b->penulis_buku }} <br> </td>
                    <td> {{ $b->penerbit_buku }} <br> </td>
                    <td> {{ $b->tahun_terbit }} <br> </td>
                    <td> {{ $b->stok_buku }} <br> </td>

                    <td>
                        @foreach ($rak as $r)
                        @if($b->rak_id_rak == $r->id_rak)
                        {{ $r->nama_rak}}
                        @endif
                        @endforeach
                    </td>

                    <td>
                        @foreach( $r->buku as $b )

                        <!-- <a href="/siswa/store{{ $b->id_buku }}" class="btn btn-warning btn-sm" type="submit">Pinjam Buku</a> -->
                        <!-- <a href="/buku/edit/{{ $b->id_buku }}" class="badge badge-success">Edit</a> -->
                        <!-- <a href="/buku/delete/{{ $b->id_buku }}" class="badge badge-danger">Hapus</a> -->
                        <br>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
@extends('masterUser')

@section('title', 'Peminjaman')

<div class="jumbotron jumbotron-section jumbotron-fluid jumbotron-anggota text-center">
    <div class="container-jumbotron">
        <h1>Peminjaman Ruang Baca {{{ Auth::user()->name }}}</h1>
        <p class="lead">Meminjam buku di Ruang Baca semakin mudah dengan hanya beberapa langkah mudah!</p>
    </div>
</div>

@section('content')

<section id="daftar-anggota">
    <div class="container">
        <h2 class="judul-section text-center">Daftar Peminjaman {{{ Auth::user()->name }}}</h2>
        <hr>



        @if (session('status tambah peminjaman berhasil'))
        <div class="alert alert-success">
            {{ session('status tambah peminjaman berhasil') }}
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
                    <th scope="col">No.</th>
                    <th scope="col">Peminjam</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Petugas</th>
                    <th scope="col">Tgl Pinjam</th>
                    <th scope="col">Tgl Kembali</th>
                    <!-- <th scope="col">Tindakan</th> -->
                </tr>
            </thead>

            <tbody>

                @foreach( $hispeminjaman as $p )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $p->nama_anggota }}</td>
                    <td>{{ $p->judul_buku }}</td>
                    <td>{{ $p->nama_petugas }}</td>
                    <td>{{ $p->tgl_pinjam }}</td>
                    <td>
                        @foreach ($pengembalian as $pe)
                        @if($p->anggota_id_anggota == $pe->anggota_id_anggota)
                        {{ $pe->tgl_kembali}}
                        @endif
                        @endforeach
                    </td>

                    <td>
                        <!--<a href="/peminjaman/{{ $p->id_pinjam }}" class="badge badge-warning">Detail</a>-->
                        <!-- <a href="/peminjaman/edit/{{ $p->id_pinjam }}" class="badge badge-success">Edit</a>
                        <a href="/peminjaman/delete/{{ $p->id_pinjam }}" class="badge badge-danger">Hapus</a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
@extends('masterAdmin')

@section('title', 'Peminjaman')

@section('content')

<div class="row mt-5">
    @if (session('status tambah berhasil'))
    <div class="alert alert-success">
        {{ session('status tambah berhasil') }}
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
</div>

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Daftar Peminjam</h3>
    </div>
    <div class="card-body">
        <div class="row mx-auto">
            <a href="/peminjaman/create" class="btn btn-success my-3 ml-2"><i class="nav-icon fas fa-plus"></i> Tambah Peminjaman</a>
            <!-- <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle my-3 ml-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nav-icon fas fa-download"></i> Download Data
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="javascript:">CSV</a>
                            <a class="dropdown-item" href="#">MS. Excel</a>
                            <a class="dropdown-item" href="#">PDF</a>
                        </div>
            </div> -->

        </div>

        <!-- <form action="" class="mb-4" method="get">
            <div class="input-group">
                <input type="text" name="cari" class="form-control" placeholder="Cari data.." autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-info font-weight-bold" type="submit">Search</button>
                    <a href="/peminjaman" class="btn btn-success font-weight-bold">Reset</a>
                </div>
            </div>
        </form> -->

        <div class="col-fluid ml-2">
            <table id="datatable" class="table table-bordered table-striped mr-max ml-max">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Peminjam</th>
                        <th scope="col">Buku</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach( $peminjaman as $p )
                    <tr>
                        <th scope="row">{{ $p->id_pinjam }}</th>
                        <td>({{ $p->anggota->id_anggota }}) - {{ $p->anggota->nama_anggota }} </td>
                        <td>{{ $p->buku->judul_buku }}</td>
                        <td>{{ $p->petugas->nama_petugas }}</td>
                        <td>{{ $p->tgl_pinjam }}</td>

                        <td>
                            <!--<a href="/peminjaman/{{ $p->id_pinjam }}" class="badge badge-warning">Detail</a>-->
                            <a href="/peminjaman/edit/{{ $p->id_pinjam }}" class="badge badge-success">Edit</a>
                            <a href="/peminjaman/delete/{{ $p->id_pinjam }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endsection
@extends('masterAdmin')

@section('title', 'Anggota')

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
        <h3 class="card-title">Daftar Anggota</h3>
    </div>
    <div class="card-body">
        <div class="row mx-auto">
            <a href="/anggota/create" class="btn btn-success my-3 ml-2"><i class="nav-icon fas fa-plus"></i> Tambah Anggota</a>
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
                    <a href="/anggota" class="btn btn-success font-weight-bold">Reset</a>
                </div>
            </div>
        </form> -->

        <div class="col-fluid ml-2">
            <table id="datatable" class="table table-bordered table-striped mr-max ml-max">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Anggota</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Kelamin</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach( $anggota as $a )
                    <tr>
                        <th scope="row">{{ $a->id_anggota }}</th>
                        <td>{{ $a->nama_anggota }}</td>
                        <td>{{ $a->alamat_anggota }}</td>
                        <td>{{ $a->telfon_anggota }}</td>
                        <td>{{ $a->jk_anggota }}</td>
                        <td>
                            <a href="/anggota/{{ $a->id_anggota }}" class="badge badge-warning">Detail</a>
                            <a href="/anggota/edit/{{ $a->id_anggota }}" class="badge badge-success">Edit</a>
                            <a href="/anggota/delete/{{ $a->id_anggota }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
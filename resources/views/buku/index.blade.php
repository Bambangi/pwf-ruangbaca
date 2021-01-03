@extends('masterAdmin')

@section('title', 'Buku')

@section('content')

<div class="row mt-5">
    @if (session('status tambah buku berhasil'))
    <div class="alert alert-success">
        {{ session('status tambah buku berhasil') }}
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
        <h3 class="card-title">Daftar Buku</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <div class="row mr-auto">
            <a href="/buku/create" class="btn btn-success my-3 ml-2"><i class="nav-icon fas fa-plus"></i> Tambah Buku</a>

            <!-- <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle my-3 ml-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nav-icon fas fa-download"></i> Download Data
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="javascript:">CSV</a>
                    <a class="dropdown-item" href="#">MS. Excel</a>
                    <a class="dropdown-item" href=""></a>
                </div>
            </div> -->

        </div>

        <!-- <form action="" class="mb-4" method="get">
            <div class="input-group">
                <input type="text" name="cari" class="form-control" placeholder="Cari data.." autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-info font-weight-bold" type="submit">Search</button>
                    <a href="/buku" class="btn btn-success font-weight-bold">Reset</a>
                </div>
            </div>
        </form> -->

        <table id="datatable" class="table table-striped">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Rak</th>
                    <th scope="col">Tindakan</th>
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
                        <a href="/buku/{{ $b->id_buku }}" class="badge badge-warning">Detail</a>
                        <a href="/buku/edit/{{ $b->id_buku }}" class="badge badge-success">Edit</a>
                        <a href="/buku/delete/{{ $b->id_buku }}" class="badge badge-danger">Hapus</a>
                        <br>
                    </td>
                </tr>
                @endforeach
            </tbody>

            <!-- <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
                </tfoot> -->
        </table>
    </div>
</div>
</div>
@endsection
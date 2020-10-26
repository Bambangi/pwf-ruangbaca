@extends('master')

@section('title', 'Form Tambah Data Petugas')

@section('content')

<section class="section-awal">
    <div class="container container-konten">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="judul-section mt-3">Form Tambah Petugas Baru</h1>
                <hr>

                <form action="/petugas/store" method="post">
                    
                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    {{ @csrf_field()  }}
                    <div class="form-group">
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" class="form-control" id="nama_petugas" placeholder="Masukkan Nama Petugas" name="nama_petugas">
                    </div>

                    @if($errors->has('nama_petugas'))
                        <div class="text-danger">
                            {{ $errors->first('nama_petugas') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="alamat_petugas">Alamat Petugas</label>
                        <input type="text" class="form-control" id="alamat_petugas" placeholder="Masukkan Alamat Petugas" name="alamat_petugas">
                    </div>

                    @if($errors->has('alamat_petugas'))
                        <div class="text-danger">
                            {{ $errors->first('alamat_petugas') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="telfon_petugas">Nomor Telfon Petugas</label>
                        <input type="text" class="form-control" id="telfon_petugas" placeholder="Masukkan Nomor Telfon Petugas" name="telfon_petugas">
                    </div>

                    @if($errors->has('telfon_petugas'))
                        <div class="text-danger">
                            {{ $errors->first('telfon_petugas') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="jk_petugas">Jenis Kelamin</label>
                        <select class="form-control" id="jk_petugas" name="jk_petugas">
                            <option>L</option>
                            <option>P</option>
                        </select>
                    </div>
                    
                
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/petugas" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


@extends('masterAdmin')

@section('title', 'Form Tambah Data Anggota')

@section('content')
<section class="section-awal">
    <div class="container container-konten">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="judul-section mt-3">Form Tambah anggota</h1>
                <hr>

                <form action="/anggota/store" method="post">
                    
                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    {{ @csrf_field()  }}
                    <div class="form-group">
                        <label for="nama_anggota">Nama Anggota</label>
                        <input type="text" class="form-control" id="nama_anggota" placeholder="Masukkan Nama anggota" name="nama_anggota">
                    </div>

                    @if($errors->has('nama_anggota'))
                        <div class="text-danger">
                            {{ $errors->first('nama_anggota') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="alamat_anggota">Alamat</label>
                        <input type="text" class="form-control" id="alamat_anggota" placeholder="Masukkan Alamat anggota" name="alamat_anggota">
                    </div>

                    @if($errors->has('alamat_anggota'))
                        <div class="text-danger">
                            {{ $errors->first('alamat_anggota') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="telfon_anggota">Telepon</label>
                        <input type="text" class="form-control" id="telfon_anggota" placeholder="Masukkan Nomor Telfon anggota" name="telfon_anggota">
                    </div>

                    @if($errors->has('telfon_anggota'))
                        <div class="text-danger">
                            {{ $errors->first('telfon_anggota') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="jk_anggota">Kelamin</label>
                        <select class="form-control" id="jk_anggota" name="jk_anggota">
                            <option>L</option>
                            <option>P</option>
                        </select>
                    </div>
                    
                
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/anggota" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
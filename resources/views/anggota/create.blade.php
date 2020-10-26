@extends('master')

@section('title', 'Form Tambah Data Anggota')

@section('content')
    <section class="section-awal">
    <div class="container container-konten">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="judul-section mt-3 text-center">Form Tambah Anggota Baru</h1>

                <form action="/anggota/store" method="post">
                    
                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    {{ @csrf_field()  }}
                    <div class="form-group">
                        <label for="nama_anggota">Nama Anggota</label>
                        <input type="text" class="form-control" id="nama_anggota" placeholder="masukkan nama anggota" name="nama_anggota" value="{{ old('nama_anggota') }}">
                    </div>

                    @if($errors->has('nama_anggota'))
                        <div class="text-danger">
                            {{ $errors->first('nama_anggota') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="no_telepon">No. Telepon (+62)</label>
                        <input type="telp" class="form-control" id="no_telepon" placeholder="masukkan no telepon" name="no_telepon" value="{{ old('no_telepon') }}">
                    </div>

                    @if($errors->has('no_telepon'))
                        <div class="text-danger">
                            {{ $errors->first('no_telepon') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option>L</option>
                            <option>P</option>
                        </select>
                    </div>

                    @if($errors->has('jenis_kelamin'))
                        <div class="text-danger">
                            {{ $errors->first('jenis_kelamin') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="masukkan alamat" name="alamat" value="{{ old('alamat') }}">
                    </div>
                    
                    @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat') }}
                        </div>
                    @endif

                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/anggota" class="btn btn-primary">Kembali</a>
                </form>

                <p class="mt-4">*masukkan data secara lengkap</p>
                <p>*teliti kembali sebelum klik simpan</p>
            </div>
        </div>
    </div>
    </section>
@endsection
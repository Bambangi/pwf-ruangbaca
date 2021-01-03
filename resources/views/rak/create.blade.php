@extends('masterAdmin')

@section('title', 'Form Tambah Data Rak')

@section('content')
    <section class="section-awal">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="judul-section mt-3 text-center">Form Tambah Rak</h1>
                <hr>
                
                <form action="/rak/store" method="post">
                    
                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    {{ @csrf_field()  }}
                    <div class="form-group">
                        <label for="nama_rak">Nama Rak</label>
                        <input type="text" class="form-control" id="nama_rak" placeholder="masukkan nama rak" name="nama_rak"value="{{ old('nama_rak') }}">
                    </div>

                    @if($errors->has('nama_rak'))
                        <div class="text-danger">
                            {{ $errors->first('nama_rak') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="lokasi_rak">Lokasi Rak</label>
                        <input type="text" class="form-control" id="lokasi_rak" placeholder="masukkan lokasi rak" name="lokasi_rak" value="{{ old('lokasi_rak') }}">
                    </div>
                    

                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/rak" class="btn btn-primary">Kembali</a>
                </form>

                <p class="mt-4">*masukkan data secara lengkap</p>
                <p>*teliti kembali sebelum klik simpan</p>
            </div>
        </div>
    </div>
    </section>
@endsection
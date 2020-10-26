@extends('master')

@section('title', 'Form Tambah Data Pengembalian')

@section('content')
    <section class="section-awal">
    <div class="container container-konten">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="judul-section mt-3 text-center">Tambah Pengembalian</h1>

                <form action="/pengembalian/store" method="post">
                    
                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    {{ @csrf_field()  }}
                    <div class="form-group">
                        <label for="tgl_kembali">Tgl kembali</label>
                        <input type="text" class="form-control" id="tgl_kembali" placeholder="masukkan nama anggota" name="tgl_kembali"value="{{ old('tgl_kembali') }}">
                    </div>

                    @if($errors->has('tgl_kembali'))
                        <div class="text-danger">
                            {{ $errors->first('tgl_kembali') }}
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


                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/pengembalian" class="btn btn-primary">Kembali</a>
                </form>

                <p class="mt-4">*masukkan data secara lengkap</p>
                <p>*teliti kembali sebelum klik simpan</p>
            </div>
        </div>
    </div>
    </section>
@endsection
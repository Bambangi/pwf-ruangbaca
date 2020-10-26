@extends('master')

@section('title', 'Form Tambah Data Buku')

@section('content')
    <section class="section-awal">
    <div class="container container-konten">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="judul-section mt-3 text-center">Form Tambah Buku Baru</h1>

                <form action="/buku/store" method="post">
                    
                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    {{ @csrf_field()  }}
                    <div class="form-group">
                        <label for="judul_buku">Judul_buku</label>
                        <input type="text" class="form-control" id="judul_buku" placeholder="masukkan judul_buku" name="judul_buku" value="{{ old('judul_buku') }}">
                    </div>

                    @if($errors->has('judul_buku'))
                        <div class="text-danger">
                            {{ $errors->first('judul_buku') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="penulis_buku">Penulis_buku</label>
                        <input type="text" class="form-control" id="penulis_buku" placeholder="masukkan penulis_buku" name="penulis_buku" value="{{ old('penulis_buku') }}">
                    </div>

                    @if($errors->has('penulis_buku'))
                        <div class="text-danger">
                            {{ $errors->first('penulis_buku') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="penerbit_buku">Penerbit Buku</label>
                        <input type="text" class="form-control" id="penerbit_buku" placeholder="masukkan penerbit buku" name="penerbit_buku" value="{{ old('penerbit_buku') }}">
                    </div>

                    @if($errors->has('penerbit_buku'))
                        <div class="text-danger">
                            {{ $errors->first('penerbit_buku') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="tahun_terbit">Tahun_terbit</label>
                        <input type="text" class="form-control" id="tahun_terbit" placeholder="masukkan tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
                    </div>
                    
                    @if($errors->has('tahun_terbit'))
                        <div class="text-danger">
                            {{ $errors->first('tahun_terbit') }}
                        </div>
                    @endif


                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/buku" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection
@extends('master')

@section('title', 'Edit Rak')

@section('content')
    <section class="section-awal">
        <div class="container container-konten">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="judul-section mt-3">Edit Rak</h2>

                    <form action="/rak/update/{{ $rak->id }}" method="post">
                        
                        <!--  csrf= ini biar nginputnya secure oleh laravel -->
                        {{ @csrf_field()  }}
                        {{ method_field('put') }}
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
                            <input type="text" class="form-control" id="lokasi_rak" placeholder="masukkan lokasi_rak" name="lokasi_rak" value="{{ old('lokasi_rak') }}">
                        </div>
                        
                        @if($errors->has('lokasi_rak'))
                            <div class="text-danger">
                                {{ $errors->first('lokasi_rak') }}
                            </div>
                        @endif

                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="/rak" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
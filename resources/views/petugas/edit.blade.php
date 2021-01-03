@extends('masterAdmin')

@section('title', 'Edit Petugas')

@section('content')
    <section class="section-awal">
        <div class="container container-konten">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="judul-section mt-3">Edit Petugas</h2>

                    <form action="/petugas/update/{{ $petugas->id_petugas }}" method="post">
                        
                        <!--  csrf= ini biar nginputnya secure oleh laravel -->
                        {{ @csrf_field()  }}
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input type="text" class="form-control" id="nama_petugas" placeholder="Masukkan Nama Petugas" name="nama_petugas" value="{{ $petugas->nama_petugas }}">
                        </div>

                        @if($errors->has('nama_petugas'))
                            <div class="text-danger">
                                {{ $errors->first('nama_petugas') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="alamat_petugas">Alamat Petugas</label>
                            <input type="text" class="form-control" id="alamat_petugas" placeholder="Masukkan Alamat Petugas" name="alamat_petugas" value="{{ $petugas->alamat_petugas }}">
                        </div>

                        @if($errors->has('alamat_petugas'))
                            <div class="text-danger">
                                {{ $errors->first('alamat_petugas') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="telfon_petugas">Telfon Petugas</label>
                            <input type="text" class="form-control" id="telfon_petugas" placeholder="Masukkan Telfon Petugas" name="telfon_petugas" value="{{ $petugas->telfon_petugas }}">
                        </div>

                        @if($errors->has('telfon_petugas'))
                            <div class="text-danger">
                                {{ $errors->first('telfon_petugas') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="jk_petugas">Jenis Kelamin</label>
                            <select class="form-control" id="jk_petugas" name="jk_petugas" value="{{ $petugas->jk_petugas }}">
                                <option>L</option>
                                <option>P</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="/petugas" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
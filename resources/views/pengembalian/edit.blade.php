@extends('master')

@section('title', 'Edit Buku')

@section('content')
    <section class="section-awal">
        <div class="container container-konten">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="judul-section mt-3">Edit Anggota</h2>

                    <form action="/anggota/update/{{ $anggota->id }}" method="post">
                        
                        <!--  csrf= ini biar nginputnya secure oleh laravel -->
                        {{ @csrf_field()  }}
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label for="nama_anggota">Nama Anggota</label>
                            <input type="text" class="form-control" id="nama_anggota" placeholder="masukkan nama_anggota" name="nama_anggota" value="{{ $anggota->nama_anggota }}">
                        </div>

                        @if($errors->has('nama_anggota'))
                            <div class="text-danger">
                                {{ $errors->first('nama_anggota') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
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
                            <label for="no_telepon">No. Telepon</label>
                            <input type="telp" class="form-control" id="no_telepon" placeholder="masukkan no telepon" name="no_telepon" value="{{ $anggota->no_telepon }}">
                        </div>

                        @if($errors->has('no_telepon'))
                            <div class="text-danger">
                                {{ $errors->first('no_telepon') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="masukkan alamat" name="alamat" value="{{ $anggota->alamat }}">
                        </div>
                        
                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif

                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="/anggota" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
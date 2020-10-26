@extends('master')

@section('title', 'Form Tambah Data Peminjaman')

@section('content')
    <section class="section-awal">
    <div class="container container-konten">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="judul-section mt-3 text-center">Form Tambah Peminjaman Baru</h1>

                <form action="/peminjaman/store" method="post">
                    
                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    {{ @csrf_field()  }}
                    <div class="form-group">
                        <label for="tgl_pinjam">Tgl Pinjam</label>
                        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                    </div>

                    @if($errors->has('tgl_pinjam'))
                        <div class="text-danger">
                            {{ $errors->first('tgl_pinjam') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="anggota_id">Peminjam</label>
                        <select class="form-control" id="anggota_id" name="anggota_id">
                            @foreach ( $anggota as $a )    
                                <option value="{{ $a->id }}">{{ $a -> nama_anggota }}</option>
                            @endforeach
                        </select>
                    </div>


                    @if($errors->has('anggota_id'))
                        <div class="text-danger">
                            {{ $errors->first('anggota_id') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="buku_id">Buku yang dipinjam :</label>
                        <select class="form-control" id="buku_id" name="buku_id">
                            @foreach ( $buku as $b )    
                                <option value="{{ $b->id }}">{{ $b->judul_buku }}</option>
                            @endforeach
                        </select>
                    </div>

                    @if($errors->has('buku_id'))
                        <div class="text-danger">
                            {{ $errors->first('buku_id') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="petugas_id">Petugas</label>
                        <select class="form-control" id="petugas_id" name="petugas_id">
                            @foreach ( $petugas as $p )    
                                <option value="{{ $p->id_petugas }}">{{ $p->nama_petugas }}</option>
                            @endforeach
                        </select>
                    </div>


                    @if($errors->has('petugas_id'))
                        <div class="text-danger">
                            {{ $errors->first('petugas_id') }}
                        </div>
                    @endif

                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/peminjaman" class="btn btn-primary">Kembali</a>
                </form>

                <p class="mt-4">*masukkan data secara lengkap</p>
                <p>*teliti kembali sebelum klik simpan</p>
            </div>
        </div>
    </div>
    </section>
@endsection
@extends('masterAdmin')

@section('title', 'Tambah Data Pengembalian')

@section('content')
<section class="section-awal">
    <div class="container container-konten">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="judul-section mt-3 text-center">Form Tambah Pengembalian</h1>

                <form action="/pengembalian/store" method="post">
                    
                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    {{ @csrf_field()  }}
                    <div class="form-group">
                        <label for="tgl_kembali">Tgl Kembali</label>
                        <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
                    </div>

                    @if($errors->has('tgl_kembali'))
                        <div class="text-danger">
                            {{ $errors->first('tgl_kembali') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="anggota_id_anggota"> Peminjam</label>
                        <select class="form-control" id="anggota_id_anggota" name="anggota_id_anggota">
                            @foreach ( $anggota as $a )    
                                <option value="{{ $a->id_anggota }}">{{ $a->nama_anggota }}</option>
                            @endforeach
                        </select>
                    </div>


                    @if($errors->has('anggota_id_anggota'))
                        <div class="text-danger">
                            {{ $errors->first('anggota_id_anggota') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="buku_id_buku"> Buku yang di Pinjam :  </label>
                        <select class="form-control" id="buku_id_buku" name="buku_id_buku">
                            @foreach ( $buku as $b )    
                                <option value="{{ $b->id_buku }}">{{ $b->judul_buku }}</option>
                            @endforeach
                        </select>
                    </div>


                    @if($errors->has('buku_id_buku'))
                        <div class="text-danger">
                            {{ $errors->first('buku_id_buku') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="petugas_id_petugas">Petugas</label>
                        <select class="form-control" id="petugas_id_petugas" name="petugas_id_petugas">
                            @foreach ( $petugas as $p )    
                                <option value="{{ $p->id_petugas }}">{{ $p->nama_petugas }}</option>
                            @endforeach
                        </select>
                    </div>


                    @if($errors->has('petugas_id_petugas'))
                        <div class="text-danger">
                            {{ $errors->first('petugas_id_petugas') }}
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
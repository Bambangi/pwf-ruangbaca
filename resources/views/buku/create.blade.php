@extends('masterAdmin')

@section('title', 'Tambah Data Buku')

@section('content')
<section class="section-awal">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="judul-section mt-1 text-center">Form Tambah Buku Baru</h1>
                <hr>

                <form action="/buku/store" method="post">

                    <!--  csrf= ini biar nginputnya secure oleh laravel -->
                    {{ @csrf_field()  }}
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" placeholder="Masukkan Judul Buku" name="judul_buku" value="{{ old('judul_buku') }}">
                    </div>

                    @if($errors->has('judul_buku'))
                    <div class="text-danger">
                        {{ $errors->first('judul_buku') }}
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="penulis_buku">Penulis Buku</label>
                        <input type="text" class="form-control" id="penulis_buku" placeholder="Masukkan Penulis Buku" name="penulis_buku" value="{{ old('penulis_buku') }}">
                    </div>

                    @if($errors->has('penulis_buku'))
                    <div class="text-danger">
                        {{ $errors->first('penulis_buku') }}
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="penerbit_buku">Penerbit Buku</label>
                        <input type="text" class="form-control" id="penerbit_buku" placeholder="Masukkan Penerbit Buku" name="penerbit_buku" value="{{ old('penerbit_buku') }}">
                    </div>

                    @if($errors->has('penerbit_buku'))
                    <div class="text-danger">
                        {{ $errors->first('penerbit_buku') }}
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="text" class="form-control" id="tahun_terbit" placeholder="Masukkan Tahun Terbit" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
                    </div>

                    @if($errors->has('tahun_terbit'))
                    <div class="text-danger">
                        {{ $errors->first('tahun_terbit') }}
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="stok_buku">Stok Buku</label>
                        <input type="text" class="form-control" id="stok_buku" placeholder="Masukkan Stok Buku" name="stok_buku" value="{{ old('stok_buku') }}">
                    </div>

                    @if($errors->has('tahun_terbit'))
                    <div class="text-danger">
                        {{ $errors->first('tahun_terbit') }}
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="rak_id_rak">Rak</label>
                        <select class="form-control" id="rak_id_rak" name="rak_id_rak">
                            @foreach ( $rak as $r )
                            <option value="{{ $r->id_rak }}">{{ $r->nama_rak }}</option>
                            @endforeach
                        </select>
                    </div>



                    @if($errors->has('rak_id'))
                    <div class="text-danger">
                        {{ $errors->first('rak_id') }}
                    </div>
                    @endif


                    <input type="submit" class="btn btn-success mb-5" value="Simpan">
                    <a href="/buku" class="btn btn-primary mb-5">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- SELECT 2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#rak_id_rak').select2();
    });
</script>

@endsection
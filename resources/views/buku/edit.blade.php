@extends('masterAdmin')

@section('title', 'Edit Buku')

@section('content')
    <section class="section-awal ">
        <div class="container container-konten">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="judul-section mt-3">Edit Buku</h2>

                    <form action="/buku/update/{{ $buku->id }}" method="post">
                        
                        <!--  csrf= ini biar nginputnya secure oleh laravel -->
                        {{ @csrf_field()  }}
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label for="judul_buku">Judul buku</label>
                            <input type="text" class="form-control" id="judul_buku" placeholder="masukkan judul_buku" name="judul_buku" value="{{ $buku->judul_buku }}">
                        </div>

                        @if($errors->has('judul_buku'))
                            <div class="text-danger">
                                {{ $errors->first('judul_buku') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="penulis_buku">Penulis buku</label>
                            <input type="text" class="form-control" id="penulis_buku" placeholder="masukkan penulis_buku" name="penulis_buku" value="{{ $buku->penulis_buku }}">
                        </div>

                        @if($errors->has('penulis_buku'))
                            <div class="text-danger">
                                {{ $errors->first('penulis_buku') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="penerbit_buku">Penerbit Buku</label>
                            <input type="text" class="form-control" id="penerbit_buku" placeholder="masukkan penerbit buku" name="penerbit_buku" value="{{ $buku->penerbit_buku }}">
                        </div>

                        @if($errors->has('penerbit_buku'))
                            <div class="text-danger">
                                {{ $errors->first('penerbit_buku') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="tahun_terbit">Tahun terbit</label>
                            <input type="text" class="form-control" id="tahun_terbit" placeholder="masukkan tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
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

                        

                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="/buku" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
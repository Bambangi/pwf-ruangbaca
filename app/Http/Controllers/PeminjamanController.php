<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use App\Anggota;
use App\Buku;
use App\Petugas;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('/peminjaman/index', compact('peminjaman'));
    }

    
    public function create()
    {
        $anggota = Anggota::all(); 
        $buku = Buku::all(); 
        $petugas = Petugas::all(); 
        return view ('/peminjaman/create', compact('anggota', 'buku', 'petugas', 'peminjaman'));
    }

    public function store(Request $request)
    {
        $peminjaman = new Peminjaman;

        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->buku_id = $request->buku_id;
        $peminjaman->petugas_id = $request->petugas_id;
        $peminjaman->anggota_id = $request->anggota_id;

        $this->validate($request, [
            'tgl_pinjam'  => 'required',
            'anggota_id'     => 'required',
            'petugas_id'     => 'required',
            'buku_id'     => 'required'
        ]);

        
        // Book::create([
        //         'judul_buku' => $request->judul_buku,
        //         'penulis_buku' => $request->penulis_buku,
        //         'penerbit_buku' => $request->penerbit_buku,
        //         'tahun_terbit' => $request->tahun_terbit
        //     ]);
            
        // Peminjaman::create($request->all());
        $peminjaman->save();
        $status_tambah = "Peminjaman Telah Berhasil Ditambahkan!";
        return redirect('/peminjaman')->with('status tambah peminjaman berhasil', $status_tambah);
    }

    
    public function show(Peminjaman $peminjaman)
    {
        return view ('/peminjaman/show', compact('peminjaman'));
    }


    public function edit($id)
    {
        $peminjaman = Peminjaman::find($id);
        $anggota = Anggota::all(); 
        $buku = Buku::all(); 
        $petugas = Petugas::all(); 
        return view ('/peminjaman/edit', compact('anggota', 'buku', 'petugas', 'peminjaman'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tgl_pinjam'  => 'required',
            'anggota_id'     => 'required',
            'petugas_id'     => 'required',
            'buku_id'     => 'required'
        ]);

        $peminjaman = Peminjaman::find($id);
        $peminjaman ->tgl_pinjam    = $request->tgl_pinjam;
        $peminjaman ->anggota_id  = $request->anggota_id;
        $peminjaman ->buku_id = $request->buku_id;
        $peminjaman ->petugas_id  = $request->petugas_id;
        $peminjaman ->save();
        // Book::find($request->all());
        $status_edit = "Data Peminjaman " .$request->id. " Telah Diedit!";
        return redirect('/peminjaman')->with('status edit berhasil', $status_edit);
    }

    
    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman -> delete();

        $status_hapus = "Data Peminjaman " .$request->id. " Telah Dihapus!";
        return redirect('/peminjaman')->with('status hapus berhasil', $status_hapus);
    }
}

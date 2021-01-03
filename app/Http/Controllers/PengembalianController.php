<?php

namespace App\Http\Controllers;

use App\Pengembalian;
use App\Anggota;
use App\Buku;
use App\Petugas;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari'))
        {
            $anggota = \App\Anggota::where('nama_anggota', 'LIKE', '%'.$request->cari.'%')->get();
            $pengembalian = \App\Pengembalian::where('tgl_kembali', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $pengembalian = Pengembalian::all();
            $anggota = Anggota::all(); 
            $buku = Buku::all(); 
            $petugas = Petugas::all(); 
        }

        return view('/pengembalian/index', compact('anggota', 'buku', 'petugas', 'pengembalian'));
    }

    
    public function create()
    {
        $anggota = Anggota::all(); 
        $buku = Buku::all(); 
        $petugas = Petugas::all(); 
        $pengembalian = Pengembalian::all();
        return view ('/pengembalian/create', compact('anggota', 'buku', 'petugas', 'pengembalian'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'tgl_kembali'  => 'required'
        ]);

        Pengembalian::create([
            'id_kembali' => null,
            'tgl_kembali' => $request->tgl_kembali,
            'anggota_id_anggota' => $request->anggota_id_anggota,
            'buku_id_buku' => $request->buku_id_buku,
            'petugas_id_petugas' => $request->petugas_id_petugas
        ]);

        
        
        $status_tambah = "Peminjaman Telah Berhasil Ditambahkan!";
        return redirect('/pengembalian')->with('status tambah pengembalian berhasil', $status_tambah);
    }

    
    public function show(Pengembalian $pengembalian)
    {
        return view ('/pengembalian/show', compact('pengembalian'));
    }


    public function edit($id)
    {
        $pengembalian = Pengembalian::find($id);
        $anggota = Anggota::all(); 
        $buku = Buku::all(); 
        $petugas = Petugas::all(); 
        return view ('/pengembalian/edit', compact('anggota', 'buku', 'petugas', 'pengembalian'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tgl_kembali'  => 'required',
            'anggota_id'     => 'required',
            'petugas_id'     => 'required',
            'buku_id'     => 'required'
        ]);

        $pengembalian = Pengembalian::find($id);
        $pengembalian ->tgl_kembali    = $request->tgl_kembali;
        $pengembalian ->anggota_id  = $request->anggota_id;
        $pengembalian ->buku_id = $request->buku_id;
        $pengembalian ->petugas_id  = $request->petugas_id;
        $pengembalian ->save();
        // Book::find($request->all());
        $status_edit = "Data Pengembalian " .$request->id. " Telah Diedit!";
        return redirect('/pengembalian')->with('status edit berhasil', $status_edit);
    }

    
    public function destroy($id)
    {
        $pengembalian = Pengembalian::find($id);
        $pengembalian -> delete();

        $status_hapus = "Data Pengembalian " .$request->id. " Telah Dihapus!";
        return redirect('/pengembalian')->with('status hapus berhasil', $status_hapus);
    }
}

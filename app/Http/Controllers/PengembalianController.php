<?php

namespace App\Http\Controllers;

use App\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pengembalian::all();
        return view('/pengembalian/index', compact('pengembalian'));
    }

    
    public function create()
    {
        return view ('/pengembalian/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_kembali'  => 'required',
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
            
        Pengembalian::create($request->all());

        $status_tambah = "Pengembalian Telah Berhasil Ditambahkan!";
        return redirect('/pengembalian')->with('status tambah pengembalian berhasil', $status_tambah);
    }

    
    public function show(Pengembalian $pengembalian)
    {
        return view ('/pengembalian/show', compact('pengembalian'));
    }


    public function edit($id)
    {
        $pengembalian = Pengembalian::find($id);
        return view ('pengembalian/edit', compact('pengembalian'));
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

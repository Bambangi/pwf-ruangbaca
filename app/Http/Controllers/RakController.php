<?php

namespace App\Http\Controllers;

use App\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    public function index()
    {
        $rak = Rak::all();
        return view('/rak/index', compact('rak'));
    }

    
    public function create()
    {
        return view ('/rak/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_rak'   => 'required',
            'lokasi_rak' => 'required'
        ]);

        
        // Book::create([
        //         'judul_buku' => $request->judul_buku,
        //         'penulis_buku' => $request->penulis_buku,
        //         'penerbit_buku' => $request->penerbit_buku,
        //         'tahun_terbit' => $request->tahun_terbit
        //     ]);
            
        Rak::create($request->all());

        $status_tambah = "Rak Telah Berhasil Ditambahkan!";
        return redirect('/rak')->with('status tambah rak berhasil', $status_tambah);
    }

    
    public function show(Rak $rak)
    {
        return view ('/rak/show', compact('rak'));
    }


    public function edit($id)
    {
        $rak = Rak::find($id);
        return view ('rak/edit', compact('rak'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_rak'    => 'required',
            'lokasi_rak'  => 'required'
        ]);

        $rak = Rak::find($id);
        $rak ->nama_rak    = $request->nama_rak;
        $rak ->lokasi_rak  = $request->lokasi_rak;
        $rak ->save();
        // Book::find($request->all());
        $status_edit = "Data Rak " .$request->id. " Telah Diedit!";
        return redirect('/rak')->with('status edit berhasil', $status_edit);
    }

    
    public function destroy($id)
    {
        $rak = Rak::find($id);
        $rak -> delete();

        $status_hapus = "Data Rak " .$request->id. " Telah Dihapus!";
        return redirect('/rak')->with('status hapus berhasil', $status_hapus);
    }
}

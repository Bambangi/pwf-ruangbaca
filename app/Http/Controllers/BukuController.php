<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    
    public function index()
    {
        $buku = Buku::all();
        // $anggota = Anggota::all();
        // $book = DB::table('books')->get();
        return view('buku/index', compact('buku')); 
    }

    public function create()
    {
        // KOK ADA ANGGOTA ?
        // KARENA DIBUAT UTK MANGGIL ID ANGGOTA
        // SOALNYA FK ANGGOTA DI TABEL INI (BUKU)
        // $anggota = Anggota::all(); \ , compact('anggota')
        return view('buku/create');
    }
 
    public function store(Request $request)
    {
        // $buku = new Buku;
        // $buku->anggota_id = $request->anggota_id;

        $this->validate($request, [
            'judul_buku'    => 'required',
            'penulis_buku'  => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit'  => 'required'
        ]);

        
        // Book::create([
        //         'judul_buku' => $request->judul_buku,
        //         'penulis_buku' => $request->penulis_buku,
        //         'penerbit_buku' => $request->penerbit_buku,
        //         'tahun_terbit' => $request->tahun_terbit
        //     ]);
        
        $status_berhasil = "Data Buku " .$request->judul_buku. " Berhasil Ditambahkan!";
        Buku::create($request->all());
        return redirect('/buku')->with('status tambah buku berhasil', $status_berhasil);
        // ->with($pesan,'Hore, Data Buku Sukses Ditambahkan!');
        

    }

    public function show(Buku $buku)
    {
        return view('buku/show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::find($id);
        // $anggota = Anggota::all(); \ compact('buku', 'anggota')
        return view('buku/edit', compact('buku'));    
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_buku'    => 'required',
            'penulis_buku'  => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit'  => 'required'
        ]);

        $buku = Buku::find($id);
        $buku ->judul_buku    = $request->judul_buku;
        $buku ->penulis_buku  = $request->penulis_buku;
        $buku ->penerbit_buku = $request->penerbit_buku;
        $buku ->tahun_terbit  = $request->tahun_terbit;
        $buku ->save();
        // Book::find($request->all());
        $status_edit = "Buku " .$request->judul_buku. " Berhasil Diedit!";
        return redirect('/buku')->with('status edit berhasil', $status_edit);
    }

    public function destroy(Request $request, $id)
    {
        $buku = Buku::find($id);
        // $buku ->judul_buku = $request->judul_buku;
        $buku -> delete();

        $status_hapus = "Buku " .$request->judul_buku. " Telah Dihapus!";
        return redirect('/buku')-> with('status hapus berhasil', $status_hapus);
    }
}

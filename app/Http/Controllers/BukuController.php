<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BukuController extends Controller
{
    
    public function index()
    {
        $buku = Book::all();
        // $book = DB::table('books')->get();
        return view('buku/index', ['buku' => $buku]); 
    }

    public function create()
    {
        return view('buku/create');
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit' => 'required'
        ]);

        
        // Book::create([
        //         'judul_buku' => $request->judul_buku,
        //         'penulis_buku' => $request->penulis_buku,
        //         'penerbit_buku' => $request->penerbit_buku,
        //         'tahun_terbit' => $request->tahun_terbit
        //     ]);
            
        Book::create($request->all());
        return redirect('/buku')->with('status tambah buku berhasil','Hore, Data Buku Sukses Ditambahkan!');
    }

    public function show(Book $buku)
    {
        return view('buku/show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Book::find($id);
        return view('buku/edit', compact('buku'));    
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit' => 'required'
        ]);

        $buku = Book::find($id);
        $buku ->judul_buku = $request->judul_buku;
        $buku ->penulis_buku = $request->penulis_buku;
        $buku ->penerbit_buku = $request->penerbit_buku;
        $buku ->tahun_terbit = $request->tahun_terbit;
        $buku ->save();
        // Book::find($request->all());
        return redirect('/buku')->with('status edit berhasil', 'Hore, Buku Telah Diedit!');
    }

    public function destroy($id)
    {
        $buku = Book::find($id);
        $buku -> delete();
        return redirect('/buku')-> with('status hapus berhasil', 'Yey, Data Buku yang Kamu Pilih Berhasil Dihapus!');
    }
}

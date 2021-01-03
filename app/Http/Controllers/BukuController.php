<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Buku;
use App\Rak;
use PDF;

class BukuController extends Controller
{

    // public function pdf()
    // {
    //     $buku = Buku::all();
    //     $rak = Rak::all();

    //     return view('buku.index', compact('buku', 'rak'));
    // }

    // public function downloadBook()
    // {
    //     $buku = Buku::all();
    //     $rak = Rak::all();
    //     $data['download'] = Buku::all();
    //     $pdf = PDF::loadView('buku.index', $data, compact('buku', 'rak'));

    //     return $pdf->download('daftar-buku.pdf');
    // }

    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $buku = DB::table('buku')
                ->where('judul_buku', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('penulis_buku', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('penerbit_buku', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('stok_buku', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $buku = Buku::all();
        }
        $rak = Rak::all();

        return view('buku/index', compact('buku', 'rak'));
    }

    public function create()
    {
        $buku = Buku::all();
        $rak = Rak::all();

        return view('buku/create', compact('buku', 'rak'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'judul_buku'    => 'required',
            'penulis_buku'  => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit'  => 'required',
            'stok_buku'  => 'required'
        ]);


        Buku::create([
            'id_buku' => null,
            'judul_buku' => $request->judul_buku,
            'penulis_buku' => $request->penulis_buku,
            'penerbit_buku' => $request->penerbit_buku,
            'tahun_terbit' => $request->tahun_terbit,
            'stok_buku' => $request->stok_buku,
            'rak_id_rak' => $request->rak_id_rak
        ]);


        $status_berhasil = "Data Buku " . $request->judul_buku . " Berhasil Ditambahkan!";

        return redirect('/buku')->with('status tambah buku berhasil', $status_berhasil);
    }

    public function show(Buku $buku)
    {
        return view('buku/show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::find($id);
        $rak = Rak::all();
        return view('buku/edit', compact('buku', 'rak'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_buku'    => 'required',
            'penulis_buku'  => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit'  => 'required',
            'stok_buku'  => 'required'
        ]);

        $buku = Buku::find($id);
        $buku->judul_buku    = $request->judul_buku;
        $buku->penulis_buku  = $request->penulis_buku;
        $buku->penerbit_buku = $request->penerbit_buku;
        $buku->tahun_terbit  = $request->tahun_terbit;
        $buku->rak_id_rak    = $request->rak_id_rak;
        $buku->save();

        // Book::find($request->all());
        $status_edit = "Buku " . $request->judul_buku . " Berhasil Diedit!";
        return redirect('/buku')->with('status edit berhasil', $status_edit);
    }

    public function destroy(Request $request, $id)
    {
        $buku = Buku::find($id);
        $buku->delete();

        $status_hapus = "Buku " . $request->judul_buku . " Telah Dihapus!";
        return redirect('/buku')->with('status hapus berhasil', $status_hapus);
    }
}

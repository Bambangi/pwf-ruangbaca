<?php

namespace App\Http\Controllers;

use App\Rak;
use App\Buku;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class RakController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $rak = DB::table('rak')
                ->where('nama_rak', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('lokasi_rak', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $rak = Rak::all();
        }
        $buku = Buku::all();

        return view('/rak/index', compact('rak', 'buku'));
    }


    public function create()
    {
        $buku = Buku::all();
        $rak = Rak::all();
        return view('/rak/create', compact('buku', 'rak'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_rak'   => 'required',
            'lokasi_rak' => 'required'
        ]);

        $rak  =  Rak::create($request->all());
        $buku = DB::table('buku')->pluck('judul_buku', 'id_buku');
        $status_tambah = "Rak Telah Berhasil Ditambahkan!";

        return redirect('/rak')->with('status tambah berhasil', $status_tambah);
    }


    public function show(Rak $rak)
    {
        return view('/rak/show', compact('rak'));
    }


    public function edit($id)
    {
        $rak = Rak::find($id);
        return view('rak/edit', compact('rak'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_rak'    => 'required',
            'lokasi_rak'  => 'required'
        ]);

        $rak = Rak::find($id);
        $rak->nama_rak    = $request->nama_rak;
        $rak->lokasi_rak  = $request->lokasi_rak;
        $rak->save();
        // Book::find($request->all());
        $status_edit = "Data Rak " . $request->id . " Telah Diedit!";
        return redirect('/rak')->with('status edit berhasil', $status_edit);
    }


    public function destroy($id)
    {
        $rak = Rak::find($id);
        $rak->delete();

        $status_hapus = "Data Rak " . $request->id . " Telah Dihapus!";
        return redirect('/rak')->with('status hapus berhasil', $status_hapus);
    }
}

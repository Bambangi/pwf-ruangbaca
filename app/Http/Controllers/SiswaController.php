<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Buku;
use App\Rak;
use App\Peminjaman;
use App\Pengembalian;
use App\Anggota;
use App\Petugas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function koleksi(Request $request)
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
        // $anggota = Anggota::all();
        // $book = DB::table('books')->get();
        return view('history/koleksibuku', compact('buku', 'rak'));
    }


    public function pinjam()
    {
        // $anggota = Anggota::all();
        // $buku = Buku::all();
        // $petugas = Petugas::all();
        // $peminjaman = Peminjaman::all();
        $pengembalian = Pengembalian::all();

        $cari = Auth::user()->name;
        $hispeminjaman  = DB::table('peminjaman')
            ->join('anggota', 'peminjaman.anggota_id_anggota', '=', 'anggota.id_anggota')
            ->join('petugas', 'peminjaman.petugas_id_petugas', '=', 'petugas.id_petugas')
            ->join('buku', 'peminjaman.buku_id_buku', '=', 'buku.id_buku')
            ->where('anggota.nama_anggota', 'LIKE', "%" . $cari . "%")
            ->get();

        return view('/history/pinjam', compact('hispeminjaman', 'pengembalian'));
    }

    public function paginate(Request $request)
    {
        $buku = Buku::when($request->keyword, function ($query) use ($request) {
            $query->where('judul_buku', 'like', "%{$request->keyword}%");
        })->get();

        return view('/history/koleksi', compact('buku'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

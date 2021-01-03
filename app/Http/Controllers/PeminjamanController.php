<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Anggota;
use App\Peminjaman;
use App\Pengembalian;
use App\Buku;
use App\Petugas;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $anggota = \App\Anggota::where('nama_anggota', 'LIKE', '%' . $request->cari . '%')->get();
            $petugas = \App\Petugas::where('nama_petugas', 'LIKE', '%' . $request->cari . '%')->get();
            $buku = \App\Buku::where('judul_buku', 'LIKE', '%' . $request->cari . '%')->get();
            $pengembalian = \App\Pengembalian::where('tgl_kembali', 'LIKE', '%' . $request->cari . '%')->get();
            $peminjaman = \App\Peminjaman::where('tgl_pinjam', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $anggota = Anggota::all();
            $buku = Buku::all();
            $petugas = Petugas::all();
            $peminjaman = Peminjaman::all();
            $pengembalian = Pengembalian::all();
        }

        return view('/peminjaman/index', compact('anggota', 'buku', 'petugas', 'peminjaman', 'pengembalian'));
    }


    public function create()
    {
        $anggota = Anggota::all();
        $buku = Buku::all();
        $petugas = Petugas::all();
        $peminjaman = Peminjaman::all();
        return view('/peminjaman/create', compact('anggota', 'buku', 'petugas', 'peminjaman'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'tgl_pinjam'  => 'required'
        ]);

        Peminjaman::create([
            'id_pinjam' => null,
            'tgl_pinjam' => $request->tgl_pinjam,
            'anggota_id_anggota' => $request->anggota_id_anggota,
            'buku_id_buku' => $request->buku_id_buku,
            'petugas_id_petugas' => $request->petugas_id_petugas
        ]);

        // $rak = DB::table('anggota')->pluck('nama_anggota' , 'id_anggota');
        // $buku = DB::table('buku')->pluck('nama_buku' , 'id_buku');
        // $petugas = DB::table('petugas')->pluck('nama_petugas' , 'id_petugas');


        $status_tambah = "Peminjaman Telah Berhasil Ditambahkan!";
        return redirect('/peminjaman')->with('status tambah peminjaman berhasil', $status_tambah);
    }


    public function show(Peminjaman $peminjaman)
    {
        return view('/peminjaman/show', compact('peminjaman'));
    }


    public function edit($id)
    {
        $peminjaman = Peminjaman::find($id);
        $anggota = Anggota::all();
        $buku = Buku::all();
        $petugas = Petugas::all();
        return view('/peminjaman/edit', compact('anggota', 'buku', 'petugas', 'peminjaman'));
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
        $peminjaman->tgl_pinjam    = $request->tgl_pinjam;
        $peminjaman->anggota_id  = $request->anggota_id;
        $peminjaman->buku_id = $request->buku_id;
        $peminjaman->petugas_id  = $request->petugas_id;
        $peminjaman->save();
        // Book::find($request->all());
        $status_edit = "Data Peminjaman " . $request->id . " Telah Diedit!";
        return redirect('/peminjaman')->with('status edit berhasil', $status_edit);
    }


    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        $status_hapus = "Data Peminjaman " . $request->$id . " Telah Dihapus!";
        return redirect('/peminjaman')->with('status hapus berhasil', $status_hapus);
    }
}

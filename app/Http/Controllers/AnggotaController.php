<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all();
        return view('/anggota/index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/anggota/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_anggota'   => 'required',
            'jenis_kelamin'  => 'required',
            'no_telepon'     => 'required',
            'alamat'     => 'required'
        ]);

        
        // Book::create([
        //         'judul_buku' => $request->judul_buku,
        //         'penulis_buku' => $request->penulis_buku,
        //         'penerbit_buku' => $request->penerbit_buku,
        //         'tahun_terbit' => $request->tahun_terbit
        //     ]);
            
        Anggota::create($request->all());

        $status_tambah = "Anggota Bernama " .$request->nama_anggota. " Telah Ditambahkan!";
        return redirect('/anggota')->with('status tambah anggota berhasil', $status_tambah);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        return view ('/anggota/show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view ('anggota/edit', compact('anggota'));
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
        $this->validate($request, [
            'nama_anggota'    => 'required',
            'jenis_kelamin'  => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required'
        ]);

        $anggota = Anggota::find($id);
        $anggota ->nama_anggota    = $request->nama_anggota;
        $anggota ->jenis_kelamin  = $request->jenis_kelamin;
        $anggota ->no_telepon = $request->no_telepon;
        $anggota ->alamat  = $request->alamat;
        $anggota ->save();
        // Book::find($request->all());
        $status_edit = "Anggota Bernama " .$request->nama_anggota. " Telah Diedit!";
        return redirect('/anggota')->with('status edit berhasil', $status_edit);
    }


    public function destroy(Request $request, $id)
    {
        $buku = Anggota::find($id);
        $buku ->nama_anggota = $request->nama_anggota;
        $buku -> delete();

        $status_hapus = "Anggota Bernama " .$request->nama_anggota. " Telah Dihapus!";
        return redirect('/anggota')-> with('status hapus berhasil', $status_hapus);
    }
}

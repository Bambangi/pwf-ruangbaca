<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::all();
        // $book = DB::table('books')->get();
        return view('petugas/index', ['petugas' => $petugas]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas/create');
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
            'nama_petugas' => 'required',
            'alamat_petugas' => 'required',
            'telfon_petugas' => 'required',
            'jk_petugas' => 'required'
        ]);

        $status_berhasil = "Data Petugas " .$request->nama_petugas. " Berhasil Ditambahkan!";
        Petugas::create($request->all());
        return redirect('/petugas')->with('status tambah berhasil', $status_berhasil);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_petugas)
    {
        return view('petugas/show', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_petugas)
    {
        $petugas = Petugas::find($id_petugas);
        return view('petugas/edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_petugas)
    {
        $this->validate($request, [
            'nama_petugas' => 'required',
            'alamat_petugas' => 'required',
            'telfon_petugas' => 'required',
            'jk_petugas' => 'required'
        ]);

        $petugas = Petugas::find($id_petugas);
        $petugas ->nama_petugas = $request->nama_petugas;
        $petugas ->alamat_petugas = $request->alamat_petugas;
        $petugas ->telfon_petugas = $request->telfon_petugas;
        $petugas ->jk_petugas = $request->jk_petugas;
        $petugas ->save();
        
        $status_edit = "Data Petugas " .$request->nama_petugas. " Berhasil Diedit!";
        return redirect('/petugas')->with('status edit berhasil', $status_edit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_petugas)
    {
        $petugas = Petugas::find($id_petugas);
        $petugas -> delete();
        return redirect('/petugas')-> with('status hapus berhasil', 'Data Petugas Berhasil Dihapus!');
    }
}

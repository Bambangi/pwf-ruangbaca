<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'tbl_pengembalian';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['tgl_kembali', 'anggota_id', 'petugas_id', 'buku_id'];

    // TABEL PENGEMBALIAN -- BERELASI ONE KE -- TABEL ANGGOTA, PETUGAS, DAN BUKU
    public function anggota()
    {
        return $this -> belongsTo('App\Anggota');
    }
    
    public function petugas()
    {
        return $this -> belongsTo('App\Petugas');
    }
    
    public function buku()
    {
        return $this -> belongsTo('App\Buku');
    }
}

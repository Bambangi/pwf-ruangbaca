<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'tbl_peminjaman';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['tgl_pinjam', 'buku_id', 'anggota_id', 'petugas_id'];

    public function buku()
    {
        return $this -> belongsTo('App\Buku');
    }

    public function anggota()
    {
        return $this -> belongsTo('App\Anggota');
    }
    
    public function petugas()
    {
        return $this -> belongsTo('App\Petugas');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengembalian extends Model
{
    use SoftDeletes;
    protected $table = 'pengembalian';
    protected $primaryKey = 'id_kembali';
    protected $keyType = 'string';
    protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $fillable = ['tgl_kembali', 'anggota_id_anggota', 'buku_id_buku', 'petugas_id_petugas'];

    public function buku()
    {
        return $this -> belongsTo(Buku::class);
    }

    public function anggota()
    {
        return $this -> belongsTo(Anggota::class);
    }
    
    public function petugas()
    {
        return $this -> belongsTo(Petugas::class);
    }

    public function peminjaman()
    {
        return $this -> belongsTo(Peminjaman::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peminjaman extends Model
{
    use SoftDeletes;
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_pinjam';
    protected $keyType = 'string';
    protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $fillable = ['tgl_pinjam', 'anggota_id_anggota', 'buku_id_buku', 'petugas_id_petugas'];

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

    public function pengembalian()
    {
        return $this -> hasOne(Pengembalian::class);
    }
}

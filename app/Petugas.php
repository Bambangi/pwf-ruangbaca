<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Petugas extends Model
{
    use SoftDeletes;
    protected $table = 'tbl_petugas';
    protected $primaryKey = 'id_petugas';
    protected $dates = ['deleted_at'];
    protected $fillable = ['nama_petugas', 'alamat_petugas', 'telfon_petugas', 'jk_petugas'];
    
    //hasMany('lokasi Model', 'FK_tabel yang direlasi', 'id asalnya');
    // public function anggota(){
    //     return $this-> hasMany('App\Anggota', 'petugas_id', 'id');
    // }

    public function pengembalian()
    {
        return $this -> hasMany('App\pengembalian');
    }

    public function peminjaman()
    {
        return $this -> hasMany('App\Peminjaman');
    }
}

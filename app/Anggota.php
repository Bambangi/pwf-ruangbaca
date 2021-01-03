<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use SoftDeletes;
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $keyType = 'string';
    protected $fillable = ['nama_anggota', 'alamat_anggota', 'telfon_anggota', 'jk_anggota'];

    // PERINTAH DIBAWAH, UNTUK RELASI ONE TO MANY DENGAN BUKU
    // 1 ANGGOTA MINIMAL BOLEH MEMINJAM 1/N BUKU SEKALIGUS (N,1)
    // hasMany = tandanya many (N)
    // belongsTo = tandanya one (1)
    
    
    // public function buku()
    // {   
    //     // this->haMany('namaObjek','namaFK','primaryKey tabelnya');
    //     // LEBIH AMAN DITULIS !!
    //     return $this->hasMany('App\Buku', 'anggota_id', 'id');
    // }

    public function pengembalian()
    {
        return $this -> hasMany(Pengembalian::class);
    }
    
    public function peminjaman()
    {
        return $this -> hasMany(Peminjaman::class);
    }
    

}

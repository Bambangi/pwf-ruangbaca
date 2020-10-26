<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'tbl_anggota';
    protected $primarykey = 'id';
    protected $fillable = ['nama_anggota', 'jenis_kelamin', 'no_telepon', 'alamat'];

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
        return $this -> hasMany('App\Pengembalian');
    }
    
    public function peminjaman()
    {
        return $this -> hasMany('App\Peminjaman');
    }
    

}

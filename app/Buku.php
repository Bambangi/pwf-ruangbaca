<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'tbl_buku';
    protected $primaryKey = 'id';
    protected $fillable = ['judul_buku', 'penulis_buku', 'penerbit_buku', 'tahun_terbit'];

    // UNTUK RELASI ONE TO MANY DENGAN ANGGOTA
    // 1/N BUKU BOLEH DIPINJAM OLEH 1 ANGGOTA (1,N)
    // belongsTo = tandanya relasi one (1)
    // hasMany = tandanya relasi many (N)
    
    public function pengembalian() 
    {
        return $this -> hasMany('App\Pengembalian');
    }

    public function rak()
    {
        return $this -> hasMany('App\Rak');
    }

    public function peminjaman()
    {
        return $this -> hasMany('App\Peminjaman');
    }
}

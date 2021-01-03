<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = ['judul_buku', 'penulis_buku', 'penerbit_buku', 'tahun_terbit', 'stok_buku', 'rak_id_rak'];

    // UNTUK RELASI ONE TO MANY DENGAN ANGGOTA
    // 1/N BUKU BOLEH DIPINJAM OLEH 1 ANGGOTA (1,N)
    // belongsTo = tandanya relasi one (1)
    // hasMany = tandanya relasi many (N)
    
    public function pengembalian() 
    {
        return $this -> hasMany(Pengembalian::class);
    }

    public function rak()
    {
        return $this -> belongsTo(Rak::class);
    }

    public function peminjaman()
    {
        return $this -> hasMany(Peminjaman::class);
    }
}

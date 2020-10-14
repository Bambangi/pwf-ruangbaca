<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = ['judul_buku', 'penulis_buku', 'penerbit_buku', 'tahun_terbit'];
}

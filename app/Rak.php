<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $table = 'tbl_rak';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nama_rak', 'lokasi_rak'];

    public function buku()
    {
        return $this -> belongsTo('App\buku');
    }
}

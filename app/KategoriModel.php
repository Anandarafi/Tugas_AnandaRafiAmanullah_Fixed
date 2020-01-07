<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table="kategori";
    protected $primarykey="kategori_buku";
    public $timestamps=false;
    protected $fillable = [
        'kategori_buku',
        'nama_kategori', 
    ];
}

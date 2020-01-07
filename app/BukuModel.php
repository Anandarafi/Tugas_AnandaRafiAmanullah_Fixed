<?php

namespace App;

use App\PeminjamanModel;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    protected $table="buku";
    protected $primarykey="kode_buku";
    public $timestamps=false;
    protected $fillable = [
        'kode_buku',
        'nama_buku',
        'eks',
        'kategori_buku',
        'kode_pengarang',
        'kode_penerbit',
        'tahun',
        'foto'  
    ];
}

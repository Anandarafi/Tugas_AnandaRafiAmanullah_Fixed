<?php

namespace App;

use App\BukuModel;
use App\SiswaModel;
use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    protected $table="peminjaman";
    protected $primarykey="id_peminjaman";
    public $timestamps=false;
    protected $fillable = [
        'id_peminjaman',
        'nisn',
        'kode_buku',
        'tgl_pinjam',
        'tgl_kembali',
        'jumlah',
    ];
}

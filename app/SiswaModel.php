<?php

namespace App;

use App\PeminjamanModel;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    protected $table="siswa";
    protected $primarykey="nisn";
    public $timestamps=false;
    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
        'genre',
    ];
}

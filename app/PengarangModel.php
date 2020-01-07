<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengarangModel extends Model
{
    protected $table="pengarang";
    protected $primarykey="kode_pengarang";
    public $timestamps=false;
    protected $fillable = [
        'kode_pengarang',
        'nama_pengarang', 
    ];
}

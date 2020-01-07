<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenerbitModel extends Model
{
    protected $table="penerbit";
    protected $primarykey="kode_penerbit";
    public $timestamps=false;
    protected $fillable = [
        'kode_penerbit',
        'nama_penerbit', 
    ];
}

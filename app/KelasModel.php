<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    protected $table="kelas";
    protected $primarykey="kelas";
    public $timestamps=false;
    protected $fillable = [
        'kelas',
        'nama_kelas', 
    ];
}

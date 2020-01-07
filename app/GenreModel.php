<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreModel extends Model
{
    protected $table="genre";
    protected $primarykey="genre";
    public $timestamps=false;
    protected $fillable = [
        'genre',
        'nama_genre', 
    ];
}   

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table="login";
    protected $primarykey="id";
    public $timestamps=false;
    protected $fillable = [
        'id',
        'no_induk',
        'password',
        'status',
    ];
}

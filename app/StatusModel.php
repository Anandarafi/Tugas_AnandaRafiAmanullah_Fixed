<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    protected $table="status";
    protected $primarykey="status";
    public $timestamps=false;
    protected $fillable = [
        'status',
        'nama_status',
    ];
}

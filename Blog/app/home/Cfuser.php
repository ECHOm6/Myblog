<?php

namespace App\home;

use Illuminate\Database\Eloquent\Model;

class Cfuser extends Model
{
    public $table='f_user_com';
    public $timestamps=false;
    protected $fillable = [
       'uid','cid'
    ];
}

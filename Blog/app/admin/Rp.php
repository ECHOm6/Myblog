<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Rp extends Model
{
    //
    protected $table='b_role_per';
    public $timestamps=false;
    protected $fillable = [
       'rid','pid'
    ];
}

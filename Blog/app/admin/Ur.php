<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Ur extends Model
{
    protected $table='b_user_role';
    public $timestamps=false;
    protected $fillable = [
        'uid','rid'
    ];
}

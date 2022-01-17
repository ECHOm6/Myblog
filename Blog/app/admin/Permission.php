<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    public $table='b_permission';
    public $timestamps=false;
    protected $fillable = [
        'id', 'title'
    ];
}

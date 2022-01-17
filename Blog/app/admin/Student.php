<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable = [
        'id', 'name', 'classnum'
    ];
}

<?php

namespace App\home;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table='f_category';
    public $timestamps=false;
    protected $fillable = [
        'id', 'name',
    ];
    
}

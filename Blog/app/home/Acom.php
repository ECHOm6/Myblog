<?php

namespace App\home;

use Illuminate\Database\Eloquent\Model;

class Acom extends Model
{
    public $table='f_art_com';
    public $timestamps=false;
    protected $fillable = [
       'aid','cid'
    ];
    
}

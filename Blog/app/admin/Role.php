<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public $table='b_role';
    public $timestamps=false;
    protected $fillable = [
        'id', 'name','des'
    ];
    public function permission(){
        return $this->belongsToMany('App\admin\Permission','b_role_per','rid','pid');
    }
}

<?php

namespace App\home;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $table='f_comments';
    public $timestamps=false;
    protected $fillable = [
        'id','fuid','comments'
    ];
    public function cuser(){
        return $this->belongsToMany('App\admin\Fuser','f_user_com','cid','uid');
    }
}

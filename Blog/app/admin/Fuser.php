<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Fuser extends Model
{
    protected $table='f_user';
    //一下内容可选‘
    //定义主键
    protected $primarykey='id';
    // 定义禁止操作时间
    public $timestamps=false;
    protected $fillable = [
       'id', 'name', 'email', 'passwd','phone','avatar'
    ];
}

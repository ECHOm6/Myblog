<?php

namespace App\home;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table='f_article';
    public $timestamps=true;
    protected $fillable = [
        'id', 'title','content','category','author','created_at','updated_at'
    ];
    public function comments(){
        return $this->belongsToMany('App\home\Comments','f_art_com','aid','cid');
    }
}

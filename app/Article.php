<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    //protected $primaryKey = 'id';
    public $timestamps = false;

    public function category(){
        return $this->belongsTo('App\Category', 'id_category', 'id');
    }

    public function image(){
        return $this->belongsTo('App\Image', 'id_images', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_users', 'id');
    }

    public function illustratearticlesmulti(){
        return $this->belongsToMany('App\Image', 'illustratearticlesmulti', 'id_articles', 'id_images');
    }
}

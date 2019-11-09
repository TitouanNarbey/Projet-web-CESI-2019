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

    public function illustratearticlesmulti(){
        return $this->belongsToMany('App\Image', 'illustratearticlesmulti', 'id_articles', 'id_images');
    }

    public function offer(){
        return $this->HasMany('App\Offer', 'id_articles', 'id');
    }

    public function comanded(){
        return $this->HasMany('App\Comanded', 'id_articles', 'id');
    }
}

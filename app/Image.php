<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['path', 'alt'];

    public function articles(){
        return $this->HasMany('App\Article', 'id_images', 'id');
    }

    public function events(){
        return $this->HasMany('App\Event', 'id_images', 'id');
    }

    public function illustrateeventsmulti(){
        return $this->HasMany('App\Illustrateeventsmulti', 'id_events', 'id');
    }

    public function commented(){
        return $this->HasMany('App\Commented', 'id_images', 'id');
    }

    public function users(){
        return $this->HasMany('App\User', 'id_images', 'id');
    }

    public function illustratearticlesmulti(){
        return $this->belongsToMany('App\Article', 'illustratearticlesmulti', 'id_images', 'id_articles');
    }
}

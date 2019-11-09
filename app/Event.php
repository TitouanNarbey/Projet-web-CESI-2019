<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    //protected $primaryKey = 'id';
    public $timestamps = false;

    public function image(){
        return $this->belongsTo('App\Image', 'id_images', 'id');
    }

    public function creator(){
        return $this->belongsTo('App\User', 'id_users', 'id');
    }

    public function participate(){
        return $this->belongsToMany('App\User', 'participate', 'id_events', 'id_users');
    }

    public function voted(){
        return $this->belongsToMany('App\User', 'voted', 'id_events', 'id_users');
    }

    public function localisation(){
        return $this->belongsToMany('App\Campus', 'localisation', 'id_events', 'id_campus');
    }

    public function posts(){
        return $this->HasMany('App\Post', 'id_events', 'id');
    }

    public function illustrateeventsmulti(){
        return $this->HasMany('App\Illustrateeventsmulti', 'id_events', 'id');
    }

}

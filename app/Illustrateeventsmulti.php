<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illustrateeventsmulti extends Model
{
    protected $table = 'illustrateeventsmulti';
    //protected $primaryKey = 'id';
    public $timestamps = false;

    public function event(){
        return $this->belongsTo('App\Event', 'id_events', 'id');
    }

    public function image(){
        return $this->belongsTo('App\Image', 'id_images', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_users', 'id');
    }
}

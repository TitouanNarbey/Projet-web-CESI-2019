<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $table = 'campus';
    //protected $primaryKey = 'id';
    public $timestamps = false;

    public function users(){
        return $this->hasMany('App\User', 'id_campus', 'id');
    }

    public function offers(){
        return $this->hasMany('App\Offer', 'id_campus', 'id');
    }

    public function events(){
        return $this->belongsToMany('App\Event', 'localisation', 'id_campus', 'id_events');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commented extends Model
{
    protected $table = 'commented';
    //protected $primaryKey = 'id';
    public $timestamps = false;

    public function image(){
        return $this->belongsTo('App\Image', 'id_images', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_users', 'id');
    }
}

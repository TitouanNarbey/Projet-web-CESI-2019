<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    //protected $primaryKey = 'id';
    public $timestamps = false;

    public function comanded(){
        return $this->hasMany('App\Comanded', 'id_orders', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_users', 'id');
    }
}

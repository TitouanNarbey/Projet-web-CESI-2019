<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanded extends Model
{
    protected $table = 'comanded';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id_orders', 'id_articles', 'quantity'];

    public function order(){
        return $this->belongsTo('App\Order', 'id_orders', 'id');
    }

    public function article(){
        return $this->belongsTo('App\Article', 'id_articles', 'id');
    }
}

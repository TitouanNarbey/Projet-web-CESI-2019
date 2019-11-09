<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offer';
    //protected $primaryKey = 'id';
    public $timestamps = false;

    public function article(){
        return $this->belongsTo('App\Article', 'id_articles', 'id');
    }

    public function campus(){
        return $this->belongsTo('App\Campus', 'id_campus', 'id');
    }
}

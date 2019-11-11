<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commented extends Model
{
    protected $table = 'commented';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id_users', 'id_illustrateeventsmulti', 'text'];

    public function illustrate(){
        return $this->belongsTo('App\Illustrateeventsmulti', 'id_illustrateeventsmulti', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_users', 'id');
    }
}

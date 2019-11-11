<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['text', 'date', 'id_users', 'id_events'];

    public function event(){
        return $this->belongsTo('App\Event', 'id_events', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_users', 'id');
    }

    public function liked(){
        return $this->belongsToMany('App\User', 'liked', 'id_posts', 'id_users');
    }
}

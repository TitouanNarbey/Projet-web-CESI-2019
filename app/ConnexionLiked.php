<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnexionLiked extends Model
{
    protected $table = 'liked';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id_posts', 'id_users'];
}

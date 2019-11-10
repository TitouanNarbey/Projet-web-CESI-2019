<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnexionVoted extends Model
{
    protected $table = 'voted';
    //protected $primaryKey = 'id';
    //public $timestamps = false;
    protected $fillable = ['id_events', 'id_users'];
}

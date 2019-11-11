<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnexionParticipate extends Model
{
    protected $table = 'participate';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id_events', 'id_users'];
}

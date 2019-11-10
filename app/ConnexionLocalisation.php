<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnexionLocalisation extends Model
{
    protected $table = 'localisation';
    //protected $primaryKey = 'id';
    //public $timestamps = false;
    protected $fillable = ['id_events', 'id_campus'];
}

<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Participate extends Model
{

 protected $table = 'participate';
    //protected $primaryKey = 'id';
    public $timestamps = false;
   public $fillable = ['id_users','id_events'];


}
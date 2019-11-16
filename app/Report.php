<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    //protected $primaryKey = 'id';
    //public $timestamps = false;
    protected $fillable = ['id_users', 'text', 'created_at', 'updated_at'];

    public function users(){
        return $this->BelongTo('App\User', 'id_users', 'id');
    }
}

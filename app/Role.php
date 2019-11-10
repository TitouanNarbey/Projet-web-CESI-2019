<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function users(){
        return $this->HasMany('App\User', 'id_roles', 'id');
    }
}

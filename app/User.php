<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $table = 'users';
    //protected $primaryKey = 'id';
    //public $timestamps = false;


    public function campus(){
    return $this->belongsTo('App\Campus', 'id_campus', 'id');
    }

    public function role(){
        return $this->belongsTo('App\Role', 'id_roles', 'id');
    }

    public function image(){
        return $this->belongsTo('App\Image', 'id_images', 'id');
    }

    //use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    /*protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/
}

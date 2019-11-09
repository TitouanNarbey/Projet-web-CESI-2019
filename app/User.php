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

    public function orders(){
        return $this->HasMany('App\Order', 'id_users', 'id');
    }

    public function commented(){
        return $this->HasMany('App\Commented', 'id_users', 'id');
    }

    public function posts(){
        return $this->HasMany('App\Post', 'id_users', 'id');
    }

    public function illustrateeventsmulti(){
        return $this->HasMany('App\Illustrateeventsmulti', 'id_users', 'id');
    }

    public function events(){
        return $this->HasMany('App\Event', 'id_users', 'id');
    }

    public function liked(){
        return $this->belongsToMany('App\Post', 'liked', 'id_users', 'id_posts');
    }

    public function participate(){
        return $this->belongsToMany('App\Event', 'participate', 'id_users', 'id_events');
    }

    public function voted(){
        return $this->belongsToMany('App\Event', 'voted', 'id_users', 'id_events');
    }






    ///   THIS IS DEFAULT class User CONTENT (// by Titouan)   ///
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

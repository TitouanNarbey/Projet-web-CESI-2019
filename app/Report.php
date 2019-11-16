<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    //protected $primaryKey = 'id';
    //public $timestamps = false;
    protected $fillable = [/*'id_users',*/ 'type', 'text', 'created_at', 'updated_at', 'link'];

    public function users(){
        return $this->BelongTo('App\User', 'id_users', 'id');
    }
}

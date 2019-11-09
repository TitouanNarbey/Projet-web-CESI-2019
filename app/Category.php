<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    //protected $primaryKey = 'id';
    public $timestamps = false;

    public function articles(){
        return $this->HasMany('App\Article', 'id_category', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BestArticle extends Model
{
    protected $table = 'bestarticles';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id_articles'];

    public function article(){
        return $this->belongsTo('App\Article', 'id_articles', 'id');
    }
}

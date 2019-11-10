<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnexionIllustratearticlesmulti extends Model
{
    protected $table = 'illustratearticlesmulti';
    //protected $primaryKey = 'id';
    //public $timestamps = false;
    protected $fillable = ['id_images', 'id_articles'];
}

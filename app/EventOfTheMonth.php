<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventOfTheMonth extends Model
{
    protected $table = 'eventsofthemonth';
    //protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id_events'];

    public function event(){
        return $this->belongsTo('App\Event', 'id_events', 'id');
    }
}

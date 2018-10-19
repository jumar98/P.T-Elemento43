<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'theater_id', 'name', 'type'
    ];

    public function theater(){
        return $this->belongsTo('App\Theater');
    }

    public function scores(){
        return $this->hasMany('App\Score');
    }
}

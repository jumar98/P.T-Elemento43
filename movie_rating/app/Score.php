<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'movie_id', 'rating'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function movie(){
        return $this->belongsTo('App\Movie');
    }
}

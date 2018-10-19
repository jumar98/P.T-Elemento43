<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'full_address'
    ];

    public function movies(){
        return $this->hasMany('App\Movie');
    }
}

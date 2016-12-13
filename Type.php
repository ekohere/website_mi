<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
     protected $fillable = [
        'name', 'information'
    ];

    public function post(){
    	return $this->hasMany('App\Post');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = [
        'title','content','like','user_id','category_id','types_id'
    ];

    public function user(){

        return $this->belongsTo('App\User');
    } 

    public function comment(){
    	return $this->hasMany('App\Comment');
    }

    public function category () {
    	return $this->belongsTo('App\Category');
    }

     public function type () {
    	return $this->belongsTo('App\Type');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = [
        'content','like','name_guest','email_guest','comment_id','user_id'
    ];


    public function childComment(){

        return $this->hasMany('App\Comment') ;
    }


    public function parentComment(){

        return $this->belongsTo('App\Comment') ;
     }

     public function user(){
     	return $this->belongsTo('App\User');
     }

     public function post(){
     	return $this->belongsTo('App\Post');
     }
}

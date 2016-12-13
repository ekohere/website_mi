<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'information','parent_category_id'
    ];

    public function childCategory(){

        return $this->hasMany('App\Category') ;
    }

    public function parentCategory(){

        return $this->belongsTo('App\Category') ;
    }

    public function post(){

        return $this->hasMany('App\Post') ;
    }
}

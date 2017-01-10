<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;
     protected $fillable = [
        'title','content','user_id','category_id','type_id'
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

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

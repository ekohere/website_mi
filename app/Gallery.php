<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
     protected $fillable = [
        'title','photo','category_id','user_id'
    ];
}

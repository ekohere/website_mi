<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
   protected $fillable = [
        'title','content','photo'
    ];
}

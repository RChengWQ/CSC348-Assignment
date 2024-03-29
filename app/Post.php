<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}

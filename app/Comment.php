<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}

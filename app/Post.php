<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
        return $this->belongsTo(\App\User::class);
    }

    public function comments() {
        return $this->hasMany(\App\Comment::class);
    }

    public function likes() {
        return $this->hasMany(\App\Like::class);
    }

    public function dislikes() {
        return $this->hasMany(\App\Dislike::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function video(){
        return $this->belongsTo(Post::class, 'video_id', 'id');
    }

    public function picture() {
        return $this->belongsTo(Post::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }
    public function like() {
        return $this->hasMany(Like::class);
    }
    public function category() {
        return $this->belongsToMany(Post::class);
    }

}

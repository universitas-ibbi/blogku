<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    protected $table = "tblpost";


    public function author()
    {
        return $this->belongsTo(User::class, "author_id");
    }

    // $post->comments
    public function comments()
    {
        return $this->hasMany(Comment::class, "post_id");
    }
}

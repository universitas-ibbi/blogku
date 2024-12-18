<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'tblcomment';

    protected $fillable = [
        "content",
        "author_id",
        "post_id"
    ];

    public function Post()
    {
        return $this->belongsTo(Post::class, "post_id");
    }
}

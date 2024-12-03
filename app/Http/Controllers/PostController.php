<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view("blog.index", [
            "posts" => \App\Models\Post::where("author_id", \Auth::id())->get()
            // "SELECT * FROM tblpost WHERE author_id = 1"
        ]);
    }

    public function simpan(Request $request)
    {
        $post = new \App\Models\Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author_id = \Auth::id();
        $post->save();

        return redirect("/");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view("blog.index", [
            "posts" => \App\Models\Post::all()
            // "SELECT * FROM tblpost"
        ]);
    }

    public function simpan(Request $request)
    {
        $post = new \App\Models\Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect("/");
    }
}

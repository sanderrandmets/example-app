<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $req) {
        $post = new Blog();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();

        return redirect()->route("blog");
    }

    public function view(Blog $post) {
        return view("blog.view", compact("post"));
    }

    public function edit(Blog $post) {
        return view("blog.edit", compact("post"));
    }

    public function create() {
        return view("blog.create");
    }

    public function update(Request $req) {
        $post = Blog::find($req->id);
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();

        return redirect()->route("blog");
    }

    public function list() {
        $posts = Blog::all();
    
        return view("blog.list", compact("posts"));
    }

    public function delete(Blog $post) {
        $post->delete();

        return redirect()->route("blog");

    }
}


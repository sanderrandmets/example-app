<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $req) {
        Blog::find($req->post_id)->comments()->create(
            $req->validate([
                "body" => "required|min:10"
            ])
            );

        return redirect()->back();
    }

    public function list(Blog $post) {
        return view("comment.list", compact("post"));
    }

    public function delete(Comment $comment) {
        $comment->delete();
        return redirect()->route("comment.list", $comment->post);
    }
}

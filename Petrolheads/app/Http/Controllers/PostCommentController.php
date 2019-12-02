<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Comment;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {
        Comment::create([
            'user_id' =>$post->id,
            'post_id' => $post->id,
            'content' => request('content')
        ]);

        return back();
    }
}

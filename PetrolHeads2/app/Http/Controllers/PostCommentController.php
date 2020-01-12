<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Comment;
use \App\User;


class PostCommentController extends Controller
{
    public function store(Post $post, User $user)
    {
        Comment::create([
            'user_id' =>$user->id,
            'post_id' => $post->id,
            'content' => request('content')
        ]);

        return back();
    }
}

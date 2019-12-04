<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Comment;


class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
    public function overview()
    {
        /*
        $post = Post::findOrFail();
        $comments = Comment::all();
        return view('/overview', compact('post', 'comments'));
        */
    }
    public function about()
    {
        return view('about');
    }
    public function profile()
    {
        return view('profiles.profile');
    }
    public function index()
    {
        $posts = Post::all();
        $comments = Comment::all();
        return view('posts.index', compact('posts', 'comments'));
    }
    public function comments()
    {
        $comments = Comment::all();
        return view('welcome', compact('comments'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        $post = new Post;
        $post->title = request('title');
        $post->content = request('content');

        $post->save();

        return redirect('/posts');
    }
    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
}

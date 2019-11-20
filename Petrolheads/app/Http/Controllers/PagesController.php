<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
    public function overview()
    {
        return view('/overview');
    }
    public function about()
    {
        return view('about');
    }
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

use \App\Post;
use \App\Comment;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except'=> 'show']);
    }
    
    public function index()
    {
        //
        $posts = Post::all();
        $comments = Comment::all();
        return view('posts.index', compact('posts', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$validated = request()->validate([
        //    'title' => ['required', 'min:10'],
        //    'content' =>['required', 'min:20'],
        //    'post_image' => 'required'
        //]);
    //$post->create($validated + ['owner_id' => auth()->id()]);
        $post = new Post;
        $post->owner_id = Auth()->id();
        $post->title = $request->input('title');
        $post->content = $request->input('content'); 
        $url = '';
        if(Input::hasFile('post_image')){
            $file = Input::file('post_image');
            $file->move(public_path(). '/uploads/', $file->getClientOriginalName());
            $url = URL::to("/") . '/uploads/'. $file->getClientOriginalName();
        }
        $post->post_image = $url;
        $post->save();
        return redirect('/posts')->with('response', 'Post Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //$comments = Comment::all();
        $comments = DB::table('users') 
        ->join('comments', 'users.id', '=', 'comments.user_id')
        ->join('posts', 'comments.post_id', '=', 'posts.id')
        ->select('users.name', 'comments.*')
        ->where(['posts.id' => $post->id])
        ->get();
        return view('posts.show', compact('post', 'comments'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //abort_if($post->owner_id !== auth()->id(), 404);

        if(\Gate::denies('update', $post)){
            abort(404);
        }

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post, Request $request)
    {
        
        
        $url = '';
        $data = $request->validate([
            'title' => ['required', 'min:10'],
            'content' =>['required', 'min:20'],
            'post_image' => 'required'
            ]);
            if(Input::hasFile('post_image')){
                $file = Input::file('post_image');
                $file->move(public_path(). '/uploads/', $file->getClientOriginalName());
                $url = URL::to("/") . '/uploads/'. $file->getClientOriginalName();
            }
            $post->post_image = $url;
            
            $post->update(request(['title', 'content', 'post_image']));
            
            //$post->update($data);
            
            return redirect('/posts');
        //return redirect('/posts')->with('response', 'Post Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }
    public function comment(Request $request, $post_id){
        $this ->validate($request, [
            'comment' => 'required',
        ]);
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $post_id;
        $comment->content = $request->input('comment');
        $comment->save();
        return redirect("/posts/{$post_id}")->with('response', 'Comment Added Successfully');
    }
}

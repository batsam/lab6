<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{

    public function index()
    {
        // Show all posts
        // get post
        $posts=Post::all();
        return view('posts.index',compact('posts'));

    }

    public function create()
    {
        // Create a post
        // get posts/create
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Insert post to database
        // post posts
        // dd(request(['title'])); dd($request->input('title'));
        // $post=new Post();
        // $post->title=$request->input('title');
        // $post->body=$request->input('body');
        // $post->save();
        // return redirect('/');

        Post::create(request(['title','body']));
        return redirect('/');

    }

    public function show(Post $post)
    {
        // Show the Post 
        // get posts/{post}
        // $post=Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

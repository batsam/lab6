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
        // $this->validate(request(),[
        $this->validate($request,[
            'title'=>"required",
            'body'=>'required'
            ]);

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

    public function edit($id)
    {
        // get post from database
        $post=Post::find($id);
        // show post in edit view
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Find the post by id
        $post=Post::find($id);
        // Validate 
        $this->validate($request,[
            'title'=>"required",
            'body'=>'required'
            ]);
        // Update the post
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();
        //Redirect to home page
        return redirect('/');
    }

    public function destroy($id)
    {
        //Find post by id
        $post=Post::find($id);
        //Delete post
        $post->delete();
        //Redirect to home page
        return redirect('/');
    }
}

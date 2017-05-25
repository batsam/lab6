<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Response;

class CommentsController extends Controller
{
    // public function store(Post $post)
    // {
    // 	Comment::create(
    // 		['body'=>request('body'),
    // 		'post_id'=>$post->id
    // 		]);
    // 	return back();
    // }

	public function store(Request $request)
	{
		Comment::create(
			['body'=>$request->body,
			'post_id'=>$request->id
			]);
		
		$comment=Comment::orderBy('created_at', 'desc')->first();
		$comment['created_at_format']=$comment->created_at->diffForHumans();
		return Response::json($comment);
		// return 'sucess';
	}
}

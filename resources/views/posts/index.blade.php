@extends('layout.master')

@section('title')
index page
@endsection

@section('content')
@foreach($posts as $post)
<div class="blog-post">
	<h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
	<p class="blog-post-meta">{{$post->created_at}} by <a href="/posts/{{$post->id}}">Mark</a></p>
	<p>{{$post->body}}</p>
</div><!-- /.blog-post -->
@endforeach
</div><!-- /.blog-main -->
@endsection






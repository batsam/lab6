@extends('layout.master')

@section('title')
index page
@endsection

@section('content')
@foreach($posts as $post)
<div class="blog-post">
	<h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
	<p class="blog-post-meta">{{$post->created_at}}  <a href="/posts/{{$post->id}}/edit">Edit</a>
	<form method="POST" action="/posts/{{$post->id}}">
		{{csrf_field()}}
		{{method_field('delete')}}
		<button type="submit">Delete</button>
	</form></p>

	<p>{{$post->body}}</p>
</div><!-- /.blog-post -->
@endforeach
</div><!-- /.blog-main -->
@endsection






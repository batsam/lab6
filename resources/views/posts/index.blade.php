@extends('layout.master')
@section('title')
index page
@endsection

@section('content')
@foreach($posts as $post)
<div class="blog-post">
	<h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
	<p class="blog-post-meta">{{$post->created_at}}  
	@if(Auth::check())
	<form method="POST" action="/posts/{{$post->id}}">
		{{csrf_field()}}
		{{method_field('delete')}}
		<a class="btn btn-primary" href="/posts/{{$post->id}}/edit">Edit</a>
		<button class="btn btn-primary" type="submit">Delete</button>
	</form>
	@endif
	</p>

	<p>{{$post->body}}</p>
</div><!-- /.blog-post -->
@endforeach
<nav aria-label="Page navigation">
{{$posts->links()}}
</nav>
</div><!-- /.blog-main -->
@endsection






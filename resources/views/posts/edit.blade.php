@extends('layout.master')

@section('title')
edit page
@endsection

@section('content')
<div class="blog-post">
	<h2 class="blog-post-title">Update Post</h2>
	<form method="POST" action="/posts/{{$post->id}}">
		{{csrf_field()}}
		{{method_field('put')}}
		<div class="form-group">
			<label for="InputTitle">Title</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{$post->title}}">
		</div>
		<div class="form-group">
			<label for="InputBody">Body</label>
			<input type="text" class="form-control" id="body" name="body" placeholder="Enter Body" value="{{$post->body}}">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
	@include('layout.errors')
</div><!-- /.blog-post -->
</div><!-- /.blog-main -->

@endsection

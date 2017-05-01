@extends('layout.master')

@section('title')
create page
@endsection

@section('content')
<div class="blog-post">
	<h2 class="blog-post-title">Add Post</h2>
	<form method="POST" action="/posts">
		{{csrf_field()}}
		<div class="form-group">
			<label for="InputTitle">Title</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" >
		</div>
		<div class="form-group">
			<label for="InputBody">Body</label>
			<input type="text" class="form-control" id="body" name="body" placeholder="Enter Body" >
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
	@include('layout.errors')
</div><!-- /.blog-post -->
</div><!-- /.blog-main -->

@endsection

@extends('layout.master')

@section('title')
Sign In
@endsection

@section('content')

<div class="blog-post">
	<h2 class="blog-post-title">Sign In</h2>
	<hr>
	<form method="POST" action="/login">
		{{csrf_field()}}
		<div class="form-group">
			<label for="Email">Email:</label>
			<input type="email" name="email" id="email" class="form-control">
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
	</wform>
	@include('layout.errors')
</div><!-- /.blog-post -->
</div><!-- /.blog-main -->

@endsection
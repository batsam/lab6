@extends('layout.master')

@section('title')
create user
@endsection

@section('content')

<div class="blog-post">
	<h2 class="blog-post-title">Register</h2>
	<hr>
	<form method="POST" action="/register">
		{{csrf_field()}}
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" class="form-control">
		</div>


		<div class="form-group">
			<label for="Email">Email:</label>
			<input type="email" name="email" id="email" class="form-control">
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" class="form-control">
		</div>

		<div class="form-group">
			<label for="password_confirmation">Password Confirmation:</label>
			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Register</button>
		</div>

	</form>
	@include('layout.errors')
</div><!-- /.blog-post -->
</div><!-- /.blog-main -->

@endsection
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
		// /posts will delete
		<a class="btn btn-primary open-model" href="/posts/{{$post->id}}/edit">Edit</a>
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

@section('script')

<script>
$(document).ready(function(){

				var url = "/posts";
		//display modal form for task editing
		$('.open-modal').click(function(){
    var task_id = $(this).val();

    $.get(url + '/' + task_id, function (data) {
        //success data
        console.log(data);
        $('#task_id').val(data.id);
        $('#task').val(data.task);
        $('#description').val(data.description);
        $('#btn-save').val("update");

        $('#myModal').modal('show');
    });
	});


});
</script>


@endsection

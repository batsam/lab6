@extends('layout.master')

@section('title')
show page
@endsection

@section('content')
<div class="blog-post">
	<h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
	<p class="blog-post-meta">{{$post->created_at}}  <a href="/posts/{{$post->id}}"></a></p>
	<p>{{$post->body}}</p>
	<hr>
	<div class="comment">
		<ul class="list-group" id="ul_comment">
			@foreach ($post->comments as $comment)
			<li class="list-group-item">
				<strong>
					{{  $comment->created_at->diffForHumans()}} &nbsp
				</strong>
				{{$comment->body}}
			</li>
			@endforeach
		</ul>
	</div>
	<hr>
	<div class="card">
		<div class="card-block">
		<form method="POST" id="frm_comment">
				{{ csrf_field() }}
				<input type="hidden" name="post_id" id="post_id" value="{{$post->id}}">
				<div class="form-group">
					<textarea id ="body" name="body" placeholder="Add your comment." class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button id="comment" class="btn btn-primary">Add Comment</button>
				</div>
			</form>
		</div>

	</div>
</div><!-- /.blog-post -->
</div><!-- /.blog-main -->
@endsection

@section('script')

<script>
	$(document).ready(function() {
		$('#comment').click(function(event) {
			event.preventDefault();
			var bod = $('#body').val();
			var id = $('#post_id').val();
			$.ajax({
				type: "POST",
				url: '/posts/comments',
				dataType:'json',
				data: {body:bod, id:id,"_token":$('input[name=_token]').val()},
				success: function(data) {
					console.log(data);
					$("#ul_comment").append('<li class="list-group-item">'+
						'<strong>'+data.created_at_format +'&nbsp'+'</strong>'+data.body+ '</li>');
					$('#frm_comment').trigger("reset");
				}
			});

		});
	});
</script>



@endsection

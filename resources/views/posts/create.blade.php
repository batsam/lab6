@extends('layout.master')

@section('title')
create page
@endsection

@section('content')
<div class="blog-post">
	<h2 class="blog-post-title">Add Post</h2>
	<form method="POST"   id="frm_create">
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
			<button id="create"  class="btn btn-primary">Submit</button>
		</div>
	</form>
	@include('layout.errors')
</div><!-- /.blog-post -->
</div><!-- /.blog-main -->

@endsection

@section('script')

<script>
	$(document).ready(function() {
			$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
				});
		$('#create').click(function(event) {
			event.preventDefault();
			var title = $('#title').val();
			var bod = $('#body').val();
			$.ajax({
				type: "POST",
				url: '/posts',
				dataType:'json',
				data: {title:title, body:bod,"_token":$('input[name=_token]').val()},
				success: function(data) {
					console.log(data);

					// $("#frm_create").append('<h1>+Created+''</h1>');
					$('#frm_create').trigger("reset").append('<div class="alert alert-success" role="alert"> <strong>Well done!</strong> You successfully create a post <a href="/" class="alert-link">See Post</a>. </div>');
				},
				error: function (xhr, ajaxOptions, thrownError) {
           console.log(xhr.status);
           console.log(xhr.responseText);
           console.log(thrownError);
       }
			});

		});
	});
</script>



@endsection

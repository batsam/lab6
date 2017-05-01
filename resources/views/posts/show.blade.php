@extends('layout.master')

@section('title')
show page
@endsection

@section('content')
<div class="blog-post">
  <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
  <p class="blog-post-meta">{{$post->created_at}} by <a href="/posts/{{$post->id}}">Mark</a></p>
  <p>{{$post->body}}</p>
</div><!-- /.blog-post -->
</div><!-- /.blog-main -->
@endsection






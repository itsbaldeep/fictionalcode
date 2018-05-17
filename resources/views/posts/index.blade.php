@extends('layouts.app')
@section('content')
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="blog-post m-2">
				<h1 class="blog-post-title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h1>
				<small class="blog-post-meta">Posted on {{$post->created_at}} by {{$post->user->name}} </small>
				<div class="blog-post-body">{!!str_limit($post->body,500)!!}</div>
				<button class="btn btn-secondary"><a href="posts/{{$post->id}}" class="text-white">Read More</a></button>
			</div>
			<hr class="post-divider"></hr>
		@endforeach
		{{$posts->links()}}
	@else
		<h1>Sorry, no posts are found!</h1>
		<h4 class="my-4">Why don't you post one?</h4>
		@guest
		<a class="btn btn-primary" href="login" role="button">Log in</a>
	  	<a class="btn btn-secondary" href="register" role="button">Sign up</a>
	  	@else
	  	<a class="btn btn-secondary" href="posts/create" role="button">Create Post</a>
      	@endguest
	@endif
@endsection
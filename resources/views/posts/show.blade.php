@extends('layouts.app')
@section('content')
	<div class="blog-post m-2">
		<h1 class="blog-post-title">{{$post->title}}</h1>
		<small class="blog-post-meta">Posted on {{$post->created_at}} by {{$post->user->name}} </small>
		<div class="blog-post-body-full">{!!$post->body!!}</div>
	</div>
@endsection



@extends('layouts.app')
@section('content')
	<h2>Create Post</h2>
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
	  <div class="form-group">
	  	{{Form::label('title', 'Add a title')}}
	  	{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
	  </div>
	  <div class="form-group">
	    {{Form::label('body', 'Add a body')}}
	    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body', 'id' => 'article-ckeditor'])}}
	  </div>
	  {{Form::submit('Post', ['class' => 'btn btn-secondary mb-2'])}}
	{!! Form::close() !!}
@endsection
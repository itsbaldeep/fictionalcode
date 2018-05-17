@extends('layouts.app')
@section('content')
	<h2>Edit Post</h2>
	{!! Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) !!}
	  <div class="form-group">
	  	{{Form::label('title', 'Change title')}}
	  	{{Form::text('title', $post->title, ['class' => 'form-control'])}}
	  </div>
	  <div class="form-group">
	    {{Form::label('body', 'Change body')}}
	    {{Form::textarea('body', $post->body, ['class' => 'form-control', 'id' => 'article-ckeditor'])}}
	  </div>
	  {{Form::submit('Post', ['class' => 'btn btn-secondary mb-2'])}}
	{!! Form::close() !!}
@endsection

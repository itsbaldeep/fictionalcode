@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body outline-secondary">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <strong>Welcome buddy!</strong>

                <p>Start writing right now!</p>

                <div class="my-3">
                    <button class="btn btn-secondary"><a class="text-white" href="posts/create">Create Post</a></button>
                </div>
                @if(count($posts) > 0)
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td><a href="{{ url('/') }}/posts/{{$post->id}}/" class="text-primary">{{$post->title}}</a></td>
                            <td>{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}<a href="{{ url('/') }}/posts/{{$post->id}}/edit" class="btn btn-secondary float-right mx-2">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                @else
                    <p> You have no posts! Go create one</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

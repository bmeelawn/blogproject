@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
    
    <div class="row">
        <div class="col-md-12">
           <img src="/storage/cover_images/{{$post->cover_image}}" style="width: 100%" alt="">
        </div>
    </div>

    <small>written at {{$post->created_at}}</small>
    <hr>
    <p>{{$post->body}}</p>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            <div class='form-group'>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' =>'pull-right']) !!}
                {{form::hidden('_method', 'DELETE')}}
                {{form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
            </div>
            <hr>
        @endif
    @endif

    <a href="/posts" class="btn btn-default">Go Back</a> 
@endsection
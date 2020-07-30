@extends('layouts.app')

@section('content')

    {{-- {{$post->title}} --}}
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class='form-group'>
            {{form::label('title', 'Title')}}
            {{form::text('title', $post->title, ['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{form::label('body', 'Body')}}
            {{form::textarea('body', $post->body, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
        {{form::file('cover_image')}}
        </div>
        {{form::hidden('_method','PUT')}}
        {{form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
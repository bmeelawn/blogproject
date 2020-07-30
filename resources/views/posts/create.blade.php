@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{form::label('title', 'Title')}}
            {{form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter the title'])}}
        </div>
        <div class="form-group">
            {{form::label('body', 'Body')}}
            {{form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter the description'])}}
        </div>
        <div class='form-group'>
        {{form::file('cover_image')}}
        </div>
        {{form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
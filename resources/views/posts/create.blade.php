@extends('layouts.app')
@section('content')

    {!! Form::open([ 'action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
        <legend><h1>Create Post</h1></legend>
        <div class="form-group">
          {{Form::file('image')}}
        </div>
        <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
          {{Form::label('body', 'Body')}}
          {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
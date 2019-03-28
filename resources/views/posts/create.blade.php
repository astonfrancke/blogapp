@extends('layouts.app')

@section('content')
  <h1>Create Post</h1>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  <div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
  </div>
  <div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body text', 'id' => 'article-ckeditor'])}}
  </div>
  <div class="form-grouup">
    {{Form::file('cover_image',['class' => 'my-sm-2'])}}
  </div>
  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
  {!! Form::close() !!}
@endsection

@extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
  <div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
  </div>
  <div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body text', 'id' => 'article-ckeditor'])}}
  </div>
  {{Form::hidden('_method', 'PUT')}}
  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
  {!! Form::close() !!}
@endsection
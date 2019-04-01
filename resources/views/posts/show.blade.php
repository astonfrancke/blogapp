@extends('layouts.app')

@section('content')
  <a class="btn btn-primary" href="/posts">Back To Blog</a>
  <hr>
  @if ($post->cover_image != 'noimage.jpg')
    <img src="/storage/cover_images/{{$post->cover_image}}" class="img-responsive" style="width:100%">
    <hr>
  @endif
  <h1>{{$post->title}}</h1>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small class="text-muted">Written on {{$post->created_at}} by {{$post->user->name}}</small>
  <hr>
  @auth
    @if (Auth::user()->id == $post->user_id)
      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
      {{Form::hidden('_method', 'DELETE')}}
      <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!! Form::close() !!}
    @endif
  @endauth
@endsection

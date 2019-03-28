@extends('layouts.app')

@section('content')
  <a class="btn btn-primary" href="/posts">Go Back</a>
  @if ($post->cover_image != 'noimage.jpg')
    <img src="/storage/cover_images/{{$post->cover_image}}" class="img-responsive" style="width:100%">
  @endif
  <h1>{{$post->title}}</h1>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  <hr>
  @auth
    @if (Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></li>
      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!! Form::close() !!}
    @endif
  @endauth
@endsection

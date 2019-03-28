@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if (count($posts) > 0)
    <div class="row">
      @foreach ($posts as $post)
        <div class="col-sm-4">
          <a href="/posts/{{$post->id}}" style="text-decoration: none">
            <div class="card" style="width: 18rem;">
              <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" style="width:100%" alt="Blog img">
              <div class="card-body">
                <h3 class="card-title">{{$post->title}}</h3>
                <p class="card-text">Written on {{$post->created_at}} by {{$post->user->name}}</p>
                <a href="/posts/{{$post->id}}" class="btn btn-primary">Read</a>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
    {{$posts->links()}}
  @else
    <p>No posts found</p>
  @endif
@endsection

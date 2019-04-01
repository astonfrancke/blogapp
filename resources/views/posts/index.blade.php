@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if (count($posts) > 0)
    @foreach ($posts as $post)
      @if ($loop->odd)
        <div class="row mb-2">
          <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-0">
                  <a class="text-dark" href="/posts/{{$post->id}}">{{$post->title}}</a>
                </h3>
                <div class="mb-1 text-muted">{{$post->created_at}}</div>
                <p class="card-text mb-auto">Written by {{$post->user->name}}</p>
                <a href="/posts/{{$post->id}}">Continue reading</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 350px; height: 250px;" src="/storage/cover_images/{{$post->cover_image}}" data-holder-rendered="true">
            </div>
          </div>
        @else
          <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-0">
                  <a class="text-dark" href="/posts/{{$post->id}}">{{$post->title}}</a>
                </h3>
                <div class="mb-1 text-muted">{{$post->created_at}}</div>
                <p class="card-text mb-auto">Written by {{$post->user->name}}</p>
                <a href="/posts/{{$post->id}}">Continue reading</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 350px; height: 250px;" src="/storage/cover_images/{{$post->cover_image}}" data-holder-rendered="true">
            </div>
          </div>
        </div>
      @endif
    @endforeach
    {{$posts->links()}}
  @else
    <p>No posts found</p>
  @endif
@endsection

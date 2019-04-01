@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Dashboard</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <h3>Your Blog Posts</h3>
            @if (count($posts) > 0)
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr>
                      <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                      <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                      <td>
                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!! Form::close() !!}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @else
              <p>You do not have any posts yet...</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          @include('posts.create')

          @foreach ($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>
                <div class="panel-body">
                    {{ $post->content }}
                </div>
                <div class="panel-footer clearfix">
                  <div class="pull-right">
                    <form method="POST" action="{{ URL::route('posts.destroy', $post->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </div>
            </div>
          @endforeach
      </div>
    </div>
</div>
@endsection

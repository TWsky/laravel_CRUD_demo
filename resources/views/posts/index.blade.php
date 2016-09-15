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
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal" data-id="{{ $post->id }}" data-title="{{ $post->title }}" data-content="{{ $post->content }}">Edit</button>
                    <form method="POST" action="{{ URL::route('posts.destroy', $post->id) }}" class="btn-form" style="display: inline;">
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

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <form method="POST" id="editPostForm">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="modal-body">
          <div class="form-group">
            <label for="post-title" class="control-label">標題:</label>
            <input type="text" class="form-control" id="postTitle" name="postTitle">
          </div>
          <div class="form-group">
            <label for="post-content" class="control-label">內文:</label>
            <input type="text" class="form-control" id="postContent" name="postContent">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

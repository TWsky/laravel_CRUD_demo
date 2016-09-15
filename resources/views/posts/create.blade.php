<form role="form" method="POST" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <div class="panel panel-default">
    <div class="panel-heading">
      <label for="title" class="col-md-4 control-label">標題：</label>
      <input id="title" type="string" class="form-control" name="title" required autofocus>
    </div>
    <div class="panel-body">
      <label for="content" class="col-md-4 control-label">內文：</label>
      <input id="content" type="string" class="form-control" name="content" required autofocus>
    </div>
    <div class="panel-footer">
      <div class="form-group">
        <button type="submit" class="btn btn-primary">
          送出
        </button>
      </div>
    </div>
  </div>
</form>

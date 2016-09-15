  <div class="panel panel-default">
    <div class="panel-heading">
      Add Sth...
    </div>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
      {{ csrf_field() }}
      <div class="panel-body">
        <div class="form-group">
          <label for="title" class="col-md-2 control-label">標題：</label>
          <div class="col-md-6">
            <input id="title" type="string" class="form-control col-md-4" name="title" required autofocus>
          </div>
        </div>
        <div class="form-group">
          <label for="content" class="col-md-2 control-label">內文：</label>
          <div class="col-md-6">
            <input id="content" type="string" class="form-control col-md-4" name="content" required autofocus>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <div class="form-group">
          <div class="col-md-2 col-md-offset-10">
            <button type="submit" class="btn btn-primary">
              送出
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>

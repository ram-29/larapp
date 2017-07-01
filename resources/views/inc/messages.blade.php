@if(count($errors))
  @foreach($errors->all() as $error)
      <div class="alert alert-danger">
        <strong>{{$error}}</strong>
      </div>
  @endforeach        
@endif

@if(session('success'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p>{{session('success')}}</p>
  </div>
@elseif(session('error'))
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{session('error')}}</strong>
  </div>
@endif
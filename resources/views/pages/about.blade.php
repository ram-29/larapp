@extends('layouts.app')
@section('content')

    <div class="container">
      <div class="col-md-12">
        <h1 class="text-center">{{$title}}</h1>
        <p>Page No: {{$pageNo}}</p>
@if(count($techs) > 0)
          Technologies:
          <ul class="list-group">
@foreach($techs as $tech)
            <li class="list-group-item">{{$tech}}</li>
@endforeach
          </ul>
@endif
        <p>Message: {{$message}}</p>
      </div>
    </div>

@endsection
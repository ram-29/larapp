@extends('layouts.app')
@section('content')

        <a href="{{ url('/posts') }}" class="btn btn-default">Go Back</a>

@if(count($post))
        <h1>{{$post->title}}</h1>
        <img style="width:100%" src="/storage/images/{{$post->image}}" alt="image">
        <small>{{$post->user->name}} at <?php echo date('Y M d h:i:sa', strtotime($post->created_at)) ?></small><br><br>
        {!!$post->body!!}    
@else
          <p>No post found.</p>
@endif
        <hr/>
        @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                        {!! Form::open([ 'action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                <a href="{{ url('/posts/'.$post->id.'/edit') }} " class="btn btn-warning btn-sm">Edit</a>
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
                        {!! Form::close() !!}
                @endif
        @endif
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <div class="pull-right">
                        <a href="{{url('/posts/create')}}" class="btn btn-primary btn-xs">Create Post</a>
                    </div>
                </div>
                <div class="panel-body">
                <legend>Blog posts</legend>
                @if(count($posts))
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Post Title</th>
                                <th>Post Body</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{!!$post->body!!}</td>
                                <td> 
                                {!! Form::open([ 'action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                    <a href="{{ url('/posts/'.$post->id.'/edit') }} " class="btn btn-warning btn-sm">Edit</a>
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
                                {!! Form::close() !!}
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p>You have no post.</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

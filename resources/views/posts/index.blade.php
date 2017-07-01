@extends('layouts.app')
@section('content')


    <legend><h1>Blog</h1></legend>
    @if(count($posts))
        @foreach($posts as $post)
        
    <div class="panel panel-default">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img style=" width:100%;" src="/storage/images/{{$post->image}}" alt="image">
            </div>
            <div class="col-md-8 col-sm-8" style="padding:25px;">
                <h3><a href="{{ url('/posts/'.$post->id.'') }}">{{$post->title}}</a></h3>
                <small>{{$post->user->name}} at <?php echo date('Y M d h:i:sa', strtotime($post->created_at)) ?></small><br><br>
                {!!$post->body!!}
            </div>
        </div>
    </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found.</p>
    @endif

@endsection
@extends('master')
@section('title', 'Blog')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if ($posts->isEmpty())
            <p> There is no post.</p>
        @else
            @foreach ($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="{{ action('BlogController@show',$post->slug) }}">{!! $post->title !!}</a></div>
                    <div class="panel-body">
                        {!! mb_substr($post->content,0,100) !!}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
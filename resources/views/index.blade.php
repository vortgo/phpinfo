@extends('layouts/site')

@section('content')
    {{--<div class="row mb-2">--}}
        {{--<nav aria-label="breadcrumb" role="navigation">--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
                {{--<li class="breadcrumb-item active" aria-current="page">Data</li>--}}
            {{--</ol>--}}
        {{--</nav>--}}
    {{--</div><div class="row mb-2">--}}
        {{--<nav aria-label="breadcrumb" role="navigation">--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
                {{--<li class="breadcrumb-item active" aria-current="page">Data</li>--}}
            {{--</ol>--}}
        {{--</nav>--}}
    {{--</div>--}}
    @foreach($posts as $post)
    <div class="row mb-5">
        <div class="col-md-12">
            <p class="h3">
                <a class="title" href="{{route('post.show', ['slug' => $post->slug])}}">
                    {{$post->title}}
                </a>
            </p>
            <p class="text-justify">
               {{$post->excerpt}}
            </p>
            <div class="row">
                <div class="col-md-8">
                    @foreach($post->tags as $tag)
                        <a href="{{route('post.tag', ['tag' => $tag->name])}}" class="badge badge-dark">{{$tag->name}}</a>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <p class="text-right">
                        {{$post->created_at->format('d F Y')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <nav>
      {{$posts->links()}}
    </nav>
@endsection
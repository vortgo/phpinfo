@extends('layouts/site')

@section('title'){{$post->seo_title}}@endsection

@section('keywords'){{$post->meta_keywords}}@endsection

@section('description'){{$post->meta_description}}@endsection

@section('content')
    <div class="row mb-5 block">
        <div class="col-md-12">
            <p class="h3">
                    {{$post->title}}
            </p>
            <p class="text-justify">
               {!! $post->body !!}
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
    <div class="row mb-5 block">
        <div class="col-md-12">
            <div id="hypercomments_widget"></div>
            <script type="text/javascript">
                _hcwp = window._hcwp || [];
                _hcwp.push({widget:"Stream", widget_id: 98535});
                (function() {
                    if("HC_LOAD_INIT" in window)return;
                    HC_LOAD_INIT = true;
                    var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
                    var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
                    hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/98535/"+lang+"/widget.js";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(hcc, s.nextSibling);
                })();
            </script>
            <a href="http://hypercomments.com" rel = "nofollow" class="hc-link" title="comments widget">comments powered by HyperComments</a>
        </div>
    </div>
    <div class="row mb-5">

    </div>
@endsection
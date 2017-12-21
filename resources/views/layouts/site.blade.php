<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @section('title')
            {{ config('app.name', 'Laravel') }}
        @show
    </title>

    <meta name="keywords" content="@section('description')Последние новости php, PHP новости, phpnews,php 7, Новости о php, PHP, Symfony, Laravel@show">

    <meta name="description" content="@section('description')PHPInfo - это сайт для разработчиков PHP, для обмена полезными заниями и последними новостями. Узнай что-нибудь новое и углуби свои звния в web-разработки@show">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.12.0/build/styles/darcula.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.12.0/build/highlight.min.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="page">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-6 offset-lg-3">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h1 class="display-5"><a href="/">phpinfo()</a></h1>
                        </div>
                    </div>
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <footer class="footer">
            <div class="container-fluid">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <span class="text-muted">@vortgo - {{date('Y')}}</span>
                </div>
            </div>
        </footer>
    </div>
</div>


<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>

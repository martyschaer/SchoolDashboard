<!DOCTYPE html>
<html>
<head>
    <!-- SEO Information -->
    <meta charset="utf-8">
    <title>School-Dashboard</title>
    <meta name="author" content="Severin Kaderli, Marius Schär">
    <meta name="keywords" content
    "school, dashboard, todo, list">
    <meta name="description" content="Project for Module 306 at gibb">
    <!-- Other Meta Information -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ABCDEF">
    <!-- Framework -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="base-url" content="{{URL::to("/")}}">
    <!-- Fonts -->
    <!--<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/app.css')}}">
    <!-- Javascript -->
    @yield('headJS')
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">School-Dashboard</a>
        </div>
        <div class="navbar-collapse collapse navbar-warning-collapse">
            @if(Auth::check())
                @include('navigation.auth')
            @else
                @include('navigation.guest')
            @endif
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="container">
    @yield('content')
</main>

<!-- Body JS -->
<script src="{{URL::asset('assets/js/app.js')}}"></script>
@yield('bodyJS')
</body>
</html>

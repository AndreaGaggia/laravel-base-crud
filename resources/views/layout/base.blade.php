<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel CRUD</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header class="text-center">
            <h1>Laravel CRUD Blog</h1>
        </header>
        <nav class="d-flex justify-content-center">
            <a href="/" class="btn btn-outline-secondary">Home</a>
            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Posts</a>
        </nav>
        @yield('content')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
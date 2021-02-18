@extends('layout.base');

@section('content')
    <h2>lista di tutti i post del db</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">body</th>
                <th scope="col">author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->author }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{ route('posts.create') }}" class="btn btn-lg btn-warning">Create a new post</a>
    </div>
@endsection
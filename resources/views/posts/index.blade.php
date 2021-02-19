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
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td class="d-flex">
                        <a href="{{ route('posts.show', ['post'=> $post->id]) }}" class="btn text-secondary">show</a>
                        <a href="{{ route('posts.edit', ['post'=> $post->id]) }}" class="btn text-primary">edit</a>
                        <a href="" class="btn text-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{ route('posts.create') }}" class="btn btn-lg btn-warning">Create a new post</a>
    </div>
@endsection
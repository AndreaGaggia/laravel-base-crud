@extends('layout.base')

@section('content')
    <h2>Modifica il post con titolo "{{ $post->title }}"</h2>
    <form action="{{ route('posts.update', ['post'=> $post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo del post</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
            <small class="form-text text-muted">Ricorda, deve essere breve e di impatto.</small>
        </div>
        <div class="from-group">
            <label for="author">Autore del post</label>
            <input type="text" class="form-control" name="author" id="author" value="{{ $post->author }}">
        </div>
        <div class="form-group">
            <label for="body">Testo del post</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="3">{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-danger">Modifica</button>
    </form>
@endsection
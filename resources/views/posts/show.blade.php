@extends('layout.base');

@section('content')
    <h2>{{ $post->title }}</h2>
    <h3>di {{ $post->author }}</h3>
    <p>{{ $post->body }}</p>
    <p>Pubblicazione: {{ $post->created_at }}</p>
    @if ($post->created_at != $post->updated_at)
    <p>Aggiornamento: {{ $post->updated_at }}</p>
    @endif
@endsection
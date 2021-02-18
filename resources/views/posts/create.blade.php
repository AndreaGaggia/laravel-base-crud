@extends('layout.base');

@section('content')
    <h2>Crea un nuovo post compilando il form</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo del post</label>
            <input type="text" class="form-control" name="title" id="title">
            <small class="form-text text-muted">Ricorda, deve essere breve e di impatto.</small>
        </div>
        <div class="form-group">
            <label for="body">Testo del post</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-danger">Crea</button>
    </form>
@endsection
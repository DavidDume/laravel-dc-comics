@extends('layout.app')

@section('title', 'Modifica Comic')

@section('content')
    <form method="POST" action="{{route('comics.update', ['comic' => $comic->id])}}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control">{{$comic->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
</form>
@endsection
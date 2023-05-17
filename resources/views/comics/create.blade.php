@extends('layout.app')

@section('title', 'Create new comic')

@section('content')
    <form method="POST" action="{{route('comics.store')}}">

        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
           <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
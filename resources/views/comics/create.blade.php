@extends('layout.app')

@section('title', 'Create new comic')

@section('content')
    <form method="POST" action="{{route('comics.store')}}">

        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" value="{{old('thumb')}}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" value="{{old('series')}}">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{old('type')}}">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price')}}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
           <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
           @error('description')
               <div class="invalid-feedback">
                   {{ $message }}
               </div>
           @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
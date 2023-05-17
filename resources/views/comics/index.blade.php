@extends('layout.app')

@section('title', 'Lista Comics')
    

@section('content')
    
<a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi nuovo comic</a>


<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Serie</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}</td>
                <td>
                  <a type="button" class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}">Mostra</a>
                </td>
            </tr>
        @endforeach

    </tbody>
  </table>


@endsection
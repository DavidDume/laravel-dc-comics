@extends('layout.app')

@section('title', 'Comics')
    
@section('content')
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <h1>{{$comic->title}}</h1>
    <h2>{{$comic->series}}</h2>
    <h2>{{$comic->type}}</h2>
    <h2>Prezzo: {{$comic->price}}</h2>
    <h3>Descrizione</h3>
    <p>{{$comic->description}}</p>
@endsection
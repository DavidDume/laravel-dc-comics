@extends('layout.app')

@section('title', 'Comics')
    
@section('content')
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <h1>{{$comic->title}}</h1>
    <h2>{{$comic->series}}</h2>
    <h2>{{$comic->type}}</h2>
    <h2>{{$comic->price}}</h2>
    <p>{{$comic->description}}</p>
@endsection

@extends('layouts.base')

@section('page-title')
    Comics
@endsection

@section('page-content')
    <h1>Comics</h1>
    <ul>
        @foreach ($comics as $comic)
            <li><img src="{{$comic->thumb}}" alt=""></li>
            <li>Title: {{$comic->title}}</li>
            <li>Price: {{$comic->price}}€</li>
            <li>Sale Date: {{$comic->sale_date}}</li>
            <a class="btn btn-primary" href="{{route('comics.show', $comic->id)}}">More Info</a>
            <a class="btn btn-warning" href="{{route('comics.edit', $comic->id)}}">Edit</a>
            <hr>
        @endforeach
    </ul>   
@endsection
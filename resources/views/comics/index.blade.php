
@extends('layouts.base')

@section('page-title')
    Comics
@endsection

@section('page-content')
    <div class="card-section">
        <h1>Comics</h1>
        <div class="list">
            @foreach ($comics as $comic)
            <div class="comic">
                <div class="content">
                    <img src="{{$comic->thumb}}" alt="">
                    <h2>{{$comic->title}}</h2>
                    <p>Price: {{$comic->price}}€</p>
                    <p>Sale Date: {{$comic->sale_date}}</p>
                    <a class="btn btn-primary" href="{{route('comics.show', $comic->id)}}">More Info</a>
                    <a class="btn btn-warning" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form> 
                </div>
            </div>
            @endforeach
        </div>  
    </div> 
@endsection
@extends('layouts.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
<div class="container">
   <h1>{{$comic->title}}</h1>
   <img src="{{$comic->thumb}}" alt=""> 
   <p>{{$comic->description}}</p>
   <ul>
        <li>Series: {{$comic->series}}</li>
        <li>Type: {{$comic->type}}</li>
   </ul>
   <h3>Price: {{$comic->price}} €</h3>
   <p>
    <a href="{{route('comics.index')}}" class="btn btn-danger">Back to Comics</a>
   </p>
</div>
@endsection
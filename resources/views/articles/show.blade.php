@extends('master')

@section('content')
    <h1>Article {{$article->id}}</h1>
    Name: {{ $article->name}}<br>
    Body: {{ $article->body }}<br>
    Author ID: {{ $article->author_id}}<br><br>

    <h3>Belongs to</h3>

    Category Name: {{ $article->category->name }}<br>
    Description: {{ $article->category->description }}<br><br>

@endsection

@extends('master')

@section('content')
   <h1>All Articles</h1>
    @foreach($articles as $article)
        <div>
            <p>ID: {{ $article->id }}</p>
            <p>Name: {{ $article->name }}</p>
            <p>Body: {{ $article->body }}</p>
            <p>Author ID: {{ $article->author_id }}</p> <br>

    @endforeach
@endsection

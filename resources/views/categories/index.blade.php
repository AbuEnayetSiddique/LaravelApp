@extends('master')

@section('content')
    <h1>ALL Categories</h1>
    @foreach ($categories as $category)
        ID: {{$category->id}}<br>
        Category Name: {{ $category->name }}<br>
        Description: {{ $category->description }}<br><br>
    @endforeach
@endsection

@extends('master')

@section('content')
    <h1>Contact Page</h1>
    @if (!empty($email) )
        @foreach($email as $emails)
            {{$emails}}
        @endforeach
    @else
        No email address given
    @endif

@endsection

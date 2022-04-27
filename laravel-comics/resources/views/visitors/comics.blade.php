@extends('visitors.template.base')

@section('title', 'DC - Comics')
    
@section('content')

@foreach ($comics as $comic)
    <img class="comic-image" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">

    <div class="comic-title"> {{ $comic['series'] }} </div>
@endforeach
    
@endsection
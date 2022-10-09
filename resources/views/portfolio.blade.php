@extends('template')

@section('title','Portfolio')

@section('content')

<h1>PORTFOLIO</h1>
<ul>
    @foreach ($proyectos as $proyecto)
    <li>{{ $proyecto['title'] }}</li>
    @endforeach
</ul>

@endsection()

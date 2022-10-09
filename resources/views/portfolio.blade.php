@extends('template')

@section('title', 'Portfolio')

@section('content')

    <h1>PORTFOLIO</h1>
    <ul>
        @if ($proyectos)
            @foreach ($proyectos as $proyecto)
                <li>{{ $proyecto['title'] }}</li>
            @endforeach
        @endif
    </ul>

@endsection()

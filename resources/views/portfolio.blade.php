@extends('template')

@section('title', 'Portfolio')

@section('content')

    <h1>PORTFOLIO</h1>
    <ul>
        @isset($proyectos)
            @forelse ($proyectos as $proyecto)
                <li>{{ $proyecto['title'] }}</li>
            @empty
                <li>Nenhum proyecto cadastrado</li>
            @endforelse
        @else
            Ocurrio un error
        @endisset
    </ul>

@endsection()

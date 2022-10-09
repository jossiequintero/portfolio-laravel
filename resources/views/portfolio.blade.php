@extends('template')

@section('title', 'Portfolio')

@section('content')

    <h1>PORTFOLIO</h1>
    <ul>
        {{--  dd(var)  --}}
        {{--  var_dump(var)  --}}
        {{-- dump() --}}
        @isset($proyectos)
            @forelse ($proyectos as $proyecto)
                <li>{{ $proyecto['title'] }}
                    <pre><?php dump($loop); ?></pre>
                    @if ($loop->first)
                        <small> Soy el primero</small>
                    @elseif($loop->last)
                        <small> Soy el ultimo</small>
                    @endif
                    <small> Soy el numero {{ $loop->iteration }}</small>
                </li>
            @empty
                <li>Nenhum proyecto cadastrado</li>
            @endforelse
        @else
            Ocurrio un error
        @endisset
    </ul>
    {{ print_r($proyectos) }}

@endsection()

@extends('template')

@section('title','Home')

@section('content')
<h1>HOME</h1>
<p>Bienvenido
    <?php echo $nombre ?? 'Invitado' ?>
</p>

@endsection()

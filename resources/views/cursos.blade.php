@extends('layouts.app')

@section('content')
<h1>Cursos</h1>
<a href="{{ route('cursos.create') }}">Crear nuevo curso</a>

<ul>
    @foreach($cursos as $curso)
        <li>{{ $curso->titulo }} - {{ $curso->descripcion }}</li>
    @endforeach
</ul>
@endsection

@extends('layouts.app')

@section('content')
<h1>Estudiantes</h1>
<a href="{{ route('estudiantes.create') }}">Registrar nuevo estudiante</a>

<ul>
    @foreach($estudiantes as $estudiante)
        <li>{{ $estudiante->nombre }} {{ $estudiante->apellido }} - {{ $estudiante->email }}</li>
    @endforeach
</ul>
@endsection

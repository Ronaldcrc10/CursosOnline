@extends('layouts.app')

@section('content')
<h1>Inscripciones</h1>
<a href="{{ route('inscripciones.create') }}">Nueva Inscripción</a>

<ul>
    @foreach($inscripciones as $inscripcion)
        <li>Curso: {{ $inscripcion->curso->titulo }}, Instructor: {{ $inscripcion->instructor->nombre }}, Estudiante: {{ $inscripcion->estudiante->nombre }}, Fecha: {{ $inscripcion->fecha_inscripcion }}</li>
    @endforeach
</ul>
@endsection

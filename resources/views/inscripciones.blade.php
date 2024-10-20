@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Inscripciones</h1>
    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary">Registrar Inscripcion del estudiante</a>
    <ul>
        @foreach($inscripciones as $inscripcion)
            <li>{{ $inscripcion->curso_id }} {{ $inscripcion->estudiante_id }} - {{ $inscripcion->instructor_id }}
                <a href="{{ route('inscripcion.curso_id', $inscripcion->estudiante_id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('inscripciones.destroy', $inscripcion->curso_id) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection

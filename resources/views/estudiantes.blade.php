@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Estudiantes</h1>
    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Registrar Estudiante</a>
    <ul>
        @foreach($estudiantes as $estudiante)
            <li>{{ $estudiante->nombre }} {{ $estudiante->apellido }} - {{ $estudiante->email }}
                <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection

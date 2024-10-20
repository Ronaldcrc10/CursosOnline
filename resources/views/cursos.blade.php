@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Cursos</h1>
    <a href="{{ route('cursos.create') }}" class="btn btn-primary">Registrar Curso</a>
    <ul>
        @foreach($cursos as $curso)
            <li>{{ $curso->titulo }} {{ $curso->descripcion }} - {{ $curso->duracion }}
                <a href="{{ route('cursos.edit', $curso->titulo) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('cursos.destroy', $curso->titulo) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection

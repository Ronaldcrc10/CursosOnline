@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Instructores</h1>
    <a href="{{ route('instructores.create') }}" class="btn btn-primary">Registrar Instructor</a>
    <ul>
        @foreach($instructores as $instructor)
            <li>{{ $instructor->nombre }} {{ $instructor->apellido }} - {{ $instructor->especialidad }}
                <a href="{{ route('instructores.edit', $instructor->nombre) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('instructores.destroy', $instructor->nombre) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection


@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($estudiante) ? 'Editar Estudiante' : 'Registrar Estudiante' }}</h1>

    <form action="{{ isset($estudiante) ? route('estudiantes.update', $estudiante->id) : route('estudiantes.store') }}" method="POST">
        @csrf
        @if(isset($estudiante))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ isset($estudiante) ? $estudiante->nombre : old('nombre') }}">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="{{ isset($estudiante) ? $estudiante->apellido : old('apellido') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ isset($estudiante) ? $estudiante->email : old('email') }}">
        </div>
        <div class="form-group">
            <label for="nivel_educativo">Nivel Educativo</label>
            <input type="text" name="nivel_educativo" class="form-control" value="{{ isset($estudiante) ? $estudiante->nivel_educativo : old('nivel_educativo') }}">
        </div>

        <button type="submit" class="btn btn-success">{{ isset($estudiante) ? 'Actualizar' : 'Registrar' }}</button>
    </form>
</div>
@endsection

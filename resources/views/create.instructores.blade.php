@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($instructor) ? 'Nuevo Instructor' : 'Registrar Instructor' }}</h1>

    <form action="{{ isset($instructor) ? route('instructor.update', $instructor->nombre) : route('instructores.store') }}" method="POST">
        @csrf
        @if(isset($instructor))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ isset($instructor) ? $instructor->nombre : old('nombre') }}">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="{{ isset($instructor) ? $instructor->apellido : old('apellido') }}">
        </div>
        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input type="text" name="especialidad" class="form-control" value="{{ isset($instructor) ? $instructor->especialidad : old('especialidad') }}">
        </div>

        <button type="submit" class="btn btn-success">{{ isset($instructor) ? 'Actualizar' : 'Registrar' }}</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($inscripcion) ? 'Nueva Inscripcion' : 'Registrar Inscripcion' }}</h1>

    <form action="{{ isset($inscripcion) ? route('inscripcion.update', $inscripcion->curso_id) : route('inscripciones.store') }}" method="POST">
        @csrf
        @if(isset($inscripcion))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="estudiante">Estudiante</label>
            <input type="text" name="estudiante" class="form-control" value="{{ isset($inscripcion) ? $inscripcion->estudiante_id : old('estudiante') }}">
        </div>
        <div class="form-group">
            <label for="curso">Cursos</label>
            <input type="text" name="curso" class="form-control" value="{{ isset($inscripcion) ? $inscripcion-curso_id : old('curso') }}">
        </div>
        <div class="form-group">
            <label for="instructores">Instructores</label>
            <input type="instructores" name="instructores" class="form-control" value="{{ isset($inscripcion) ? $inscripcion->instructores_id : old('instructores') }}">
        </div>   

        <button type="submit" class="btn btn-success">{{ isset($inscripcion) ? 'Actualizar' : 'Registrar' }}</button>
    </form>
</div>
@endsection
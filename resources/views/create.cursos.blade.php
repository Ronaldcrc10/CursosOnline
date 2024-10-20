@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($curso) ? 'Nuevo Curso' : 'Registrar Curso' }}</h1>

    <form action="{{ isset($curso) ? route('curso.update', $curso->id) : route('cursos.store') }}" method="POST">
        @csrf
        @if(isset($curso))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control" value="{{ isset($curso) ? $curso->titulo : old('titulo') }}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" value="{{ isset($curso) ? $curso-descripcion : old('descripcion') }}">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="precio" name="precio" class="form-control" value="{{ isset($curso) ? $curso->precio : old('precio') }}">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" class="form-control" value="{{ isset($curso) ? $curso->categoria : old('categoria') }}">
        </div>

        <button type="submit" class="btn btn-success">{{ isset($curso) ? 'Actualizar' : 'Registrar' }}</button>
    </form>
</div>
@endsection

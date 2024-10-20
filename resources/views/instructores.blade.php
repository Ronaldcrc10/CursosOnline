@extends('layouts.app')

@section('content')
<h1>Instructores</h1>
<a href="{{ route('instructores.create') }}">Crear nuevo instructor</a>

<ul>
    @foreach($instructores as $instructor)
        <li>{{ $instructor->nombre }} {{ $instructor->apellido }} - {{ $instructor->especialidad }}</li>
    @endforeach
</ul>
@endsection

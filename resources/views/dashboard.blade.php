<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>   

    <dic>   
    <div class="menu">
        <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Gestionar Estudiantes</a>
        <a href="{{ route('instructores.index') }}" class="btn btn-primary">Gestionar Instructores</a>
        <a href="{{ route('cursos.index') }}" class="btn btn-primary">Gestionar Cursos</a>
        <a href="{{ route('inscripciones.index') }}" class="btn btn-primary">Gestionar Inscripciones</a>
    </div>
</div>
</x-app-layout>

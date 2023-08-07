@extends('layout')

@section('title', 'Detalles del Estudiante')

@section('content')
<div class="max-w-lg mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Detalles del Estudiante</h1>
    <div class="bg-white shadow-md rounded-lg p-6 space-y-4">
        <ul>
            <li><strong>Nombre:</strong> {{ $student->user->name }} {{ $student->user->lastname }}</li>
            <li><strong>Matrícula:</strong> {{ $student->enrollment }}</li>
            <li><strong>Generación:</strong> {{ $student->generation }}</li>
            <li><strong>Aula:</strong> {{ $student->classroom }}</li>
            <li><strong>Promedio Final:</strong> {{ $student->final_grade }}</li>
        </ul>
    </div>
    <a href="{{ route('teachers') }}" class="block mt-6 text-blue-500 hover:underline">Volver</a>
</div>
@endsection

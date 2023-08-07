@extends('layout')

@section('title', 'Estudiante')

@section('content')
<div class="flex justify-center items-center bg-gray-100">
    <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8 space-y-6">
        <h1 class="text-3xl font-bold text-center mb-4">¡Bienvenido, {{ $user->name }} {{ $user->lastname }}!</h1>
        <div class="border-t border-gray-300"></div>
        <div class="space-y-2">
            <p class="text-lg"><strong>Información del Estudiante:</strong></p>
            <ul class="list-disc list-inside">
                <li><strong>Matrícula:</strong> {{ $estudiante->enrollment }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>Generación:</strong> {{ $estudiante->generation }}</li>
                <li><strong>Aula:</strong> {{ $estudiante->classroom }}</li>
                <li><strong>Promedio Final:</strong> {{ $estudiante->final_grade }}</li>
            </ul>
        </div>
        <div class="border-t border-gray-300"></div>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 w-full">Cerrar Sesión</button>
        </form>
    </div>
</div>
@endsection

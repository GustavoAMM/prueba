@extends('layout')

@section('title', 'Estudiante')

@section('content')
<div class="max-w-lg mx-auto py-10">
    <h1 class="text-3xl font-bold mb-4">Estudiante</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-2">Bienvenido {{ $user->name }} {{ $user->lastname }}</h2>
        <h3 class="text-lg font-semibold mb-4">Estudiante: {{ $estudiante->enrollment }}</h3>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Generación:</strong> {{ $estudiante->generation }}</p>
        <p><strong>Aula:</strong> {{ $estudiante->classroom }}</p>
        <p><strong>Promedio Final:</strong> {{ $estudiante->final_grade }}</p>
    </div>
    <form action="{{ route('logout') }}" method="post" class="mt-6">
        @csrf
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Salir</button>
    </form>
</div>
@endsection
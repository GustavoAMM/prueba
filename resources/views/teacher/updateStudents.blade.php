@extends('layout')

@section('title', 'Editar Notas del Estudiante')

@section('content')
<div class="max-w-lg mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Editar Notas del Estudiante</h1>
    <div class="bg-white shadow-md rounded-lg p-6 space-y-4">
        <form action="{{ route('student.update', $student->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-lg font-semibold mb-2">Nombre</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-md"  value="{{ $student->user->name }}">
                @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror

            </div>

            <div class="mb-4">
                <label for="lastname" class="block text-lg font-semibold mb-2">Apellidos</label>
                <input type="text" name="lastname" id="lastname" class="w-full px-4 py-2 border rounded-md" value="{{ $student->user->lastname }}">
                @error('lastname')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror

            </div>

            <div class="mb-4">
                <label for="enrollment" class="block text-lg font-semibold mb-2">Matrícula</label>
                <input type="text" name="enrollment" id="enrollment" class="w-full px-4 py-2 border rounded-md" value="{{ $student->enrollment }}" disabled>
            </div>

            <div class="mb-4">
                <label for="generation" class="block text-lg font-semibold mb-2">Generación</label>
                <input type="text" name="generation" id="generation" class="w-full px-4 py-2 border rounded-md" value="{{ $student->generation }}">
                @error('generation')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="classroom" class="block text-lg font-semibold mb-2">Aula</label>
                <input type="text" name="classroom" id="classroom" class="w-full px-4 py-2 border rounded-md" value="{{ $student->classroom }}">
                @error('classroom')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="final_grade" class="block text-lg font-semibold mb-2">Promedio Final</label>
                <input type="number" name="final_grade" id="final_grade" class="w-full px-4 py-2 border rounded-md" step="0.01" value="{{ $student->final_grade }}">
                @error('final_grade')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Guardar Notas</button>
        </form>
    </div>
    <a href="{{ route('teachers') }}" class="block mt-6 text-blue-500 hover:underline">Volver</a>
</div>
@endsection

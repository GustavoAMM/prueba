@extends('layout')

@section('title', 'Nuevo Estudiante')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 shadow-md rounded-lg">
    <h2 class="text-2xl mb-4 text-center">Nuevo estudiante</h2>
    <form action="{{ route('newstudent') }}" method="POST">
        @csrf
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="name" class="block mb-1">Nombre(s):</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                @error('name')
                <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="lastname" class="block mb-1">Apellidos:</label>
                <input type="text" id="lastname" name="lastname" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                @error('lastname')
                <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-1">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                @error('email')
                <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-1">Contraseña:</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                @error('password')
                <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="generation" class="block mb-1">Generación:</label>
                <input type="text" id="generation" name="generation" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                @error('generation')
                <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="classroom" class="block mb-1">Aula:</label>
                <input type="text" id="classroom" name="classroom" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                @error('classroom')
                <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="bg-blue-500 w-full text-white py-2 px-4 rounded-lg mt-4 hover:bg-blue-600 focus:outline-none focus:ring">Registrar</button>
    </form>
</div>
@endsection
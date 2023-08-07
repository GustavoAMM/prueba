@extends('layout')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 shadow-md rounded-lg">
    <h2 class="text-2xl mb-4 text-center">Iniciar Sesión</h2>
    @error('data-error')
        <div class="text-center text-red-600">{{ $message }}</div>
    @enderror
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block mb-1">Correo Electrónico:</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            @error('email')
            <small class="text-red-500 text-sm">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block mb-1">Contraseña:</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            @error('password')
            <small class="text-red-500 text-sm">{{ $message }}</small>
            @enderror
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 w-full text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring text-center">Ingresar</button>

        </div>
    </form>
    <div class="mt-4 text-center">
        <p>¿Aún no tienes una cuenta? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Regístrate aquí</a></p>
    </div>
</div>
@endsection
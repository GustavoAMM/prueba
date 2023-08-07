@extends('layout')

@section('title', 'Registrarse')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 shadow-md rounded-lg">
    <h2 class="text-2xl mb-4 text-center">Registrarse</h2>
    <form action="{{ route('register') }}" method="POST">
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
        </div>
        <div class="mt-4 text-center">
            <label class="block mb-1">Selecciona una opción:</label>
            <label class="inline-flex items-center">
                <input type="radio" class="form-radio" name="user_type" value="alumno" id="alumnoRadio">
                <span class="ml-2">Alumno</span>
            </label>
            <label class="inline-flex items-center ml-6">
                <input type="radio" class="form-radio" name="user_type" value="maestro" id="maestroRadio">
                <span class="ml-2">Maestro</span>
            </label>
            @error('user_type')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror

        </div>
        <div class="mt-4" id="generacion" style="display: none;">
            <label for="generation" class="block mb-1">Generación:</label>
            <input type="text" id="generation" name="generation" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            @error('generation')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-4" id="direccion" style="display: none;">
            <label for="address" class="block mb-1">Dirección:</label>
            <input type="text" id="address" name="address" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            @error('address')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-4" id="phone" style="display: none;">
            <label for="phone" class="block mb-1">Teléfono:</label>
            <input type="text" id="phone" name="phone" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            @error('phone')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-4" id="materia" style="display: none;">
            <label for="subject" class="block mb-1">Materia:</label>
            <input type="text" id="subject" name="subject" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            @error('subject')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-4" id="aula" style="display: none;">
            <label for="classroom" class="block mb-1">Aula:</label>
            <input type="text" id="classroom" name="classroom" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            @error('classroom')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 w-full text-white py-2 px-4 rounded-lg mt-4 hover:bg-blue-600 focus:outline-none focus:ring">Registrarse</button>
    </form>
    <div class="mt-4 text-center">
        <p>¿Ya tienes una cuenta? <a href="{{ route('home') }}" class="text-blue-500 hover:underline">Inicia sesión aquí</a></p>
    </div>
</div>
<script>
    const alumnoRadio = document.getElementById('alumnoRadio');
    const maestroRadio = document.getElementById('maestroRadio');
    const generacionInput = document.getElementById('generacion');
    const direccionInput = document.getElementById('direccion');
    const phoneInput = document.getElementById('phone');
    const materiaInput = document.getElementById('materia');
    const classroomInput = document.getElementById('aula');

    alumnoRadio.addEventListener('change', () => {
        generacionInput.style.display = alumnoRadio.checked ? 'block' : 'none';
        direccionInput.style.display = maestroRadio.checked ? 'block' : 'none';
        phoneInput.style.display = maestroRadio.checked ? 'block' : 'none';
        materiaInput.style.display = maestroRadio.checked ? 'block' : 'none';
        classroomInput.style.display = alumnoRadio.checked ? 'block' : 'none';
    });

    maestroRadio.addEventListener('change', () => {
        generacionInput.style.display = alumnoRadio.checked ? 'block' : 'none';
        direccionInput.style.display = maestroRadio.checked ? 'block' : 'none';
        phoneInput.style.display = maestroRadio.checked ? 'block' : 'none';
        materiaInput.style.display = maestroRadio.checked ? 'block' : 'none';
        classroomInput.style.display = alumnoRadio.checked ? 'block' : 'none';
    });
</script>
@endsection
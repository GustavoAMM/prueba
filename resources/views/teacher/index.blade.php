@extends('layout')

@section('title', 'Página del Maestro')

@section('content')
<div class="flex justify-center items-center bg-gray-100">
    <div class="max-w-lg w-full bg-white shadow-lg rounded-lg p-8 space-y-6">
        <h1 class="text-3xl font-bold text-center mb-6">!Bienvenido, Maestro {{$user->name}}!</h1>
        <h2 class="text-xl font-semibold mb-4">Estudiantes:</h2>
        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Nombre(s)</th>
                    <th class="border px-4 py-2">Apellidos</th>
                    <th class="border px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="border px-4 py-2">{{ $student->user->name }}</td>
                    <td class="border px-4 py-2">{{ $student->user->lastname }}</td>
                    <td class="border px-4 py-2 space-x-2">
                        <a href="{{ route('student.show', $student->id) }}" class="text-blue-500 hover:underline">Ver</a>
                        <a href="{{ route('student.edit', $student->id) }}" class="text-blue-500 hover:underline">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="border-t border-gray-300 mt-6"></div>
        <form action="{{ route('logout') }}" method="post" class="mt-6">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 w-full">Salir</button>
        </form>
    </div>
</div>
@endsection

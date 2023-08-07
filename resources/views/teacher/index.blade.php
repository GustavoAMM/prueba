@extends('layout')

@section('title', 'Página del Maestro')

@section('content')
    <div class="max-w-lg mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Bienvenido, Maestro</h1>
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
                        <td class="border px-4 py-2">
                            <a href="{{ route('student.show', $student->id) }}" class="text-blue-500 hover:underline">Ver</a>
                            <a href="{{ route('student.edit', $student->id) }}" class="text-blue-500 hover:underline ml-2">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('logout') }}" method="post" class="mt-6">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Salir</button>
        </form>
    </div>
@endsection

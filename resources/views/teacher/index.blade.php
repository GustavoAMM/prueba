@extends('layout')

@section('title', 'Página del Maestro')

@section('content')
    <h1>Bienvenido, Maestro</h1>
    <h2>Estudiantes:</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->user->name }}</td>
                    <td>{{ $student->user->lastname }}</td>
                    <td>
                        <a href="{{ route('student.show', $student->id) }}">Ver</a>
                        <a href="{{ route('student.edit', $student->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

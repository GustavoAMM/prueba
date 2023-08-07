<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Ruta para la vista de login
Route::get('/', function () {
    return view('home.login');
})->name('home');

// Ruta para la vista de registro
Route::get('/register', function () {
    return view('home.register');
})->name('register');

// Ruta para subir login de usuarios
Route::post('/login', [UserController::class, 'login'])->name('login');
// Ruta para subir registro de usuarios
Route::post('/register', [UserController::class, 'register'])->name('register');


// Ruta para ver las notas de TODOS los estudiantes (solo para maestros)
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
// Ruta para ver la notas de UN SOLO estudiante (solo para maestros)
Route::get('/teachers/{id}', [TeacherController::class, 'show'])->name('student.show');
// Ruta para el form y editar las notas de UN SOLO ESTUDIANTE (solo para maestros)
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('student.edit');
// Ruta para subir las  nuevas notas de un estudiante (solo para maestros)
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('student.update');
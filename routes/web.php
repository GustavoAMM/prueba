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

// Ruta para subir registrar nuevo estudiante (solo para maestros)
Route::post('/teachers/store', [StudentController::class, 'register'])->name('newstudent');



// Ruta para crear un nuevo estudiante (solo para maestros)
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('student.create');
// Ruta para mostar el form de crear un nuevo estudiante (solo para maestros)
Route::post('/teachers', [TeacherController::class, 'store'])->name('student.store');
// Ruta para ver las notas de TODOS los estudiantes (solo para maestros)
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
// Ruta para ver la notas de UN SOLO estudiante (solo para maestros)
Route::get('/teachers/{id}', [TeacherController::class, 'show'])->name('student.show');
// Ruta para el form y editar las notas de UN SOLO ESTUDIANTE (solo para maestros)
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('student.edit');
// Ruta para subir las  nuevas notas de un estudiante (solo para maestros)
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('student.update');



// Ruta para ver mi perfil (solo para estudiantes)
Route::get('/students', [StudentController::class, 'index'])->name('students');
// Ruta para cerrar sesión
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
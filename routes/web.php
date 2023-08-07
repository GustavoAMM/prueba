<?php

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
// Ruta para la vista de inicio
Route::get('/', function () {
    return view('home.login');
})->name('home');

// Ruta para la vista de registro
Route::get('/register', function () {
    return view('home.register');
})->name('register');

// Ruta para el login de usuarios
Route::post('/login', [UserController::class, 'login'])->name('login');
// Ruta para el registro de usuarios
Route::post('/register', [UserController::class, 'register'])->name('register');

// Ruta para la vista de estudiantes
Route::get('/students', function () {
    return view('student.index');
})->name('students');

// Ruta para la vista de maestros
Route::get('/teachers', function () {
    return view('teacher.index');
})->name('teachers');
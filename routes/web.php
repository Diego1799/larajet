<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource("doctores", "App\Http\Controllers\DoctorController");

Route::resource("pacientes", "App\Http\Controllers\PacienteController");

Route::resource("hospitales", "App\Http\Controllers\HospitalController");

Route::get('inicio', function () {
    return view('inicio.inicio');
});

Route::get('test', function () {
    return view('paciente.test');
});

Route::get('resultado', function () {
    return view('paciente.resultado');
});


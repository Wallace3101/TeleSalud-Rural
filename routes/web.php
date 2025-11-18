<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PacienteController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para el Paciente
Route::get('/paciente/dashboard', [PacienteController::class, 'dashboard']);
Route::get('/paciente/reservar-cita', [PacienteController::class, 'reservarCita']);
Route::get('/paciente/historial', [PacienteController::class, 'historial']);
Route::get('/paciente/perfil-medico', [PacienteController::class, 'perfilMedico']);
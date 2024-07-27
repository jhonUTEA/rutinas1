<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*Se definen rutas en una aplicación Laravel.
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();/* Esta línea configura las rutas de autenticación proporcionadas por Laravel,
                  que incluyen registro, login, y recuperación de contraseñas*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/rutinas', [App\Http\Controllers\RutinasController::class, 'index']);
Route::get('/rutinas/crear', [App\Http\Controllers\RutinasController::class, 'crear']);
Route::get('/rutinas/{rutina}/editar', [App\Http\Controllers\RutinasController::class, 'editar']);
Route::post('/rutinas', [App\Http\Controllers\RutinasController::class, 'enviar']);
Route::put('/rutinas/{rutina}', [App\Http\Controllers\RutinasController::class, 'actualizar']);
Route::delete('/rutinas/{rutina}', [App\Http\Controllers\RutinasController::class, 'eliminar']);

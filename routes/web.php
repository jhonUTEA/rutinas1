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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/rutinas', [App\Http\Controllers\RutinasController::class, 'index']);
Route::get('/rutinas/crear', [App\Http\Controllers\RutinasController::class, 'crear']);
Route::get('/rutinas/{rutina}/editar', [App\Http\Controllers\RutinasController::class, 'editar']);
Route::post('/rutinas', [App\Http\Controllers\RutinasController::class, 'enviar']);
Route::put('/rutinas/{rutina}', [App\Http\Controllers\RutinasController::class, 'actualizar']);
Route::delete('/rutinas/{rutina}', [App\Http\Controllers\RutinasController::class, 'eliminar']);

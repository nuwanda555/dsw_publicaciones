<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('publicacion/pdf', [PublicacionController::class, 'pdf'])->name('publicacion.pdf');

//ruta para el recurso publicacion
Route::resource('publicacion', 'App\Http\Controllers\PublicacionController')->except(['delete']);
//route para borrar una publicación
Route::get('publicacion/{id}/borrar', [PublicacionController::class, 'borrar'])->name('publicacion.borrar');


//generar listado pdf de publicaciones

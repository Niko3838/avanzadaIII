<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Docentes;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Materias;



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

Route::get('/dashboard', [HomeController::class,'index']
)->middleware(['auth', 'verified'])->name('dashboard');

//Rutas Facultades
Route::get('/facultades/listado', [Facultades::class,'index']
)->middleware(['auth', 'verified'])->name('facultades_listado');

Route::get('/facultades/registrar', [Facultades::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_facultad');

Route::post('/facultades/registrar', [Facultades::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_facultad');

//Ruta eliminar
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'] //recibe parametro
)->middleware(['auth', 'verified'])->name('eliminar_facultad');

//Rutas Programas
Route::get('/programas/listado', [Programas::class,'index']
)->middleware(['auth', 'verified'])->name('programas_listado');

Route::match(['get', 'post'], '/programas/registrar', [Programas::class, 'form_registrar'])
->middleware(['auth','verified'])->name('form_registro_programa');

//Rutas Docentes
Route::get('/docentes/listado', [Docentes::class,'index']
)->middleware(['auth', 'verified'])->name('docentes_listado');

//Rutas Estudiantes
Route::get('/estudiantes/listado', [Estudiantes::class,'index']
)->middleware(['auth', 'verified'])->name('estudiantes_listado');

//Rutas Materias
Route::get('/materias/listado', [Materias::class,'index']
)->middleware(['auth', 'verified'])->name('materias_listado');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

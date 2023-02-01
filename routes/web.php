<?php

use App\Http\Controllers\AdminDominiosController;
use App\Http\Controllers\AdminRegionesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExportController;
use Illuminate\Support\Facades\Artisan;
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
    return redirect('tercero');
});

Route::get('inicio', [HomeController::class, 'index']);

//Dominios - General
Route::get('Administrar/dominios', [AdminDominiosController::class, 'index']);
Route::get('Administrar/dominios/show/{id}', [AdminDominiosController::class, 'ShowDominiosGroup']);

//Dominios - REGIONES
Route::get('Administrar/regiones', [AdminRegionesController::class, 'index']);
Route::get('Administrar/regiones/pais/{id}', [AdminRegionesController::class, 'ShowPais']);
Route::get('Administrar/regiones/pais/{idCountry}/estado/{idDepart}', [AdminRegionesController::class, 'ShowEstado']);

//importar
Route::get('import/documents', [ImportExportController::class, 'index']);
Route::post('import/CG-Dominios/{id}', [ImportExportController::class, 'Import_CG_Dominios'])->name('import.cg.dominios');
Route::post('import/CG_Grupo_Dominios/{id}', [ImportExportController::class, 'Import_CG_Grupo_Dominios'])->name('import.cg.grupo.dominios');
Route::post('import/CG_Valores_Dominio/{id}', [ImportExportController::class, 'Import_CG_Valores_Dominio'])->name('import.cg.valores.dominios');

//Resource Create Edit Update
Route::resource('tercero', TerceroController::class);

//configuracion
Route::get('/configuration', function () {
    Artisan::call('migrate');
});

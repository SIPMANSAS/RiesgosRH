<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExportController;
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
    return view('Layout.layout');
});

Route::get('import/documents', [ImportExportController::class, 'index']);
Route::post('import/CG-Dominios/{id}', [ImportExportController::class, 'Import_CG_Dominios'])->name('import.cg.dominios');
Route::post('import/label/{id}', [ImportExportController::class, 'Import_CG_Grupo_Dominios'])->name('import.cg.grupo.dominios');
Route::post('import/factory/{id}', [ImportExportController::class, 'Import_CG_Valores_Dominio'])->name('import.cg.valores.dominios');

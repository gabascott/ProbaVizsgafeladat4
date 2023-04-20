<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\ReceptController;
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
})->name('kezdolap');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/api/kategoriak', [KategoriaController::class, 'index']);
Route::get('/api/kategoria_keres', [KategoriaController::class, 'keres']);
Route::get('/api/kategoria_torol', [KategoriaController::class, 'torol']);
Route::get('/api/kategoria_felvisz', [KategoriaController::class, 'ujKategoria']);
Route::get('/api/kategoria_modosit', [KategoriaController::class, 'modositKategoria']);

Route::get('/api/receptek', [ReceptController::class, 'index']);
Route::get('/api/recept_keres', [ReceptController::class, 'keres']);
Route::get('/api/recept_torol', [ReceptController::class, 'torol']);
Route::get('/api/recept_felvisz', [ReceptController::class, 'ujRecept']);
Route::get('/api/recept_modosit', [ReceptController::class, 'modositRecept']);

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Ruta de Lugares
//Route::resource('lugares', \App\Http\Controllers\Places::class);
Route::get('destino', [\App\Http\Controllers\Places::class, 'index'])->name('lugares.index');
Route::get('destino/create', [\App\Http\Controllers\Places::class, 'create'])->name('lugares.create');
Route::post('destino/store', [\App\Http\Controllers\Places::class, 'store'])->name('lugares.store');
Route::get('destino/edit/{id}', [\App\Http\Controllers\Places::class, 'edit'])->name('lugares.edit');
Route::put('destino/update/{$lugar}', [\App\Http\Controllers\Places::class, 'update'])->name('lugares.update');

//Vehiculo
Route::get('vehiculo', \App\Livewire\Vehiculo::class)->name('vehiculo');
//Mantenimientos
Route::get('mantenimiento', \App\Livewire\Mantenimiento::class)->name('mantenimiento');
//Pieza
Route::get('pieza', \App\Livewire\Pieza::class)->name('pieza');


<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage'); 
});

Route::get('/annunci', [AdController::class, 'index'])->name('ads.index');
Route::get('/annunci/crea', [AdController::class, 'create'])->name('ads.create');
Route::post('/annunci/salva', [AdController::class, 'store'])->name('ads.store');
Route::get('/annunci/{ad}/dettagli', [AdController::class, 'show'])->name('ads.show');
Route::get('/annunci/{ad}/modifica', [AdController::class, 'edit'])->name('ads.edit');
Route::put('/annunci/{ad}', [AdController::class, 'update'])->name('ads.update');
Route::delete('/annunci/{ad}', [AdController::class, 'destroy'])->name('ads.delete');



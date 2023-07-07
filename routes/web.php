<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

//Route della homepage
Route::get('/', [PageController::class, 'homepage'])->name('homepage');

//Routes degli annunci
Route::get('/annunci', [AdController::class, 'index'])->name('ads.index');
Route::get('/annunci/crea', [AdController::class, 'create'])->name('ads.create');
// Route::post('/annunci/salva', [AdController::class, 'store'])->name('ads.store');
Route::get('/annunci/{ad}/dettagli', [AdController::class, 'show'])->name('ads.show');
Route::get('/annunci/{ad}/modifica', [AdController::class, 'edit'])->name('ads.edit');
// Route::put('/annunci/{ad}', [AdController::class, 'update'])->name('ads.update');
Route::delete('/annunci/{ad}', [AdController::class, 'destroy'])->name('ads.delete');


Route::get('/ricerca/annuncio', [PageController::class, 'searchAds'])->name('ads.search');

// Home Revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

// Accetta Annuncio
Route::patch('/accetta/annuncio/{ad}', [RevisorController::class, 'acceptAd'])->middleware('isRevisor')->name('revisor.accept_ad');
// Rifiuta Annuncio
Route::patch('/rifiuta/annuncio/{ad}', [RevisorController::class, 'rejectAd'])->middleware('isRevisor')->name('revisor.reject_ad');
// Recupera Annuncio
Route::patch('/recupera/annuncio/{ad}', [RevisorController::class, 'restoreAd'])->middleware('isRevisor')->name('revisor.restore_ad');


// Richiedi di diventare revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// Rendi utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/lavora-con-noi', [RevisorController::class, 'application'])->middleware('auth')->name('revisor.application');
Route::put('/lavora-con-noi/{user}', [RevisorController::class, 'send'])->middleware('auth')->name('revisor.send');

Route::get('/profilo', [ProfileController::class, 'index'])->middleware('auth')->name('profile.index');
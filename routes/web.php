<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

//Route della homepage
Route::get('/', function () {
    $categories = Category::all();
    return view('homepage', ['categories' => $categories]);
})->name('homepage');

//Routes degli annunci
Route::get('/annunci', [AdController::class, 'index'])->name('ads.index');
Route::get('/annunci/crea', [AdController::class, 'create'])->name('ads.create');
// Route::post('/annunci/salva', [AdController::class, 'store'])->name('ads.store');
Route::get('/annunci/{ad}/dettagli', [AdController::class, 'show'])->name('ads.show');
Route::get('/annunci/{ad}/modifica', [AdController::class, 'edit'])->name('ads.edit');
// Route::put('/annunci/{ad}', [AdController::class, 'update'])->name('ads.update');
// Route::delete('/annunci/{ad}', [AdController::class, 'destroy'])->name('ads.delete');

//Routes delle categorie
// Route::get('/categorie', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categorie/crea', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categorie/salva', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categorie/{category}/dettagli', [CategoryController::class, 'show'])->name('categories.show');
// Route::get('/categorie/{category}/modifica', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categorie/{category}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categorie/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');
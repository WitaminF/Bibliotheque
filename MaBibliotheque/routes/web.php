<?php

use App\Http\Controllers\auteurController;
use App\Http\Controllers\categorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\livreController;
use App\Http\Controllers\dashboardController;

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

//Dashboard
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

//livres CRUD
Route::get('/livre', [livreController::class, 'index'])->name('livre');

//Auteurs CRUD
Route::get('/auteur', [auteurController::class, 'index'])->name('auteur');
Route::get('/auteur/create', [auteurController::class, 'create'])->name('auteur.create');
Route::post('/auteur/create', [auteurController::class, 'store'])->name('auteur.store');
Route::get('/auteur/edit/{auteur}', [auteurController::class, 'edit'])->name('auteur.edit');
Route::post('/auteur/update/{id}', [auteurController::class, 'update'])->name('auteur.update');
Route::post('/auteur/delete/{id}', [auteurController::class, 'destroy'])->name('auteur.destroy');

//Catégorie CRUD
Route::get('/categorie', [categorieController::class, 'index'])->name('categorie');
Route::get('/categorie/create', [categorieController::class, 'create'])->name('categorie.create');
Route::post('/categorie/create', [categorieController::class, 'store'])->name('categorie.store');
Route::get('/categorie/edit/{categorie}', [categorieController::class, 'edit'])->name('categorie.edit');
Route::post('/categorie/update/{id}', [categorieController::class, 'update'])->name('categorie.update');
Route::post('/categorie/delete/{id}', [categorieController::class, 'destroy'])->name('categorie.destroy');

//Editeurs CRUD
Route::get('/editeur', [categorieController::class, 'index'])->name('editeur');
Route::get('/editeur/create', [categorieController::class, 'create'])->name('editeur.create');
Route::post('/editeur/create', [categorieController::class, 'store'])->name('editeur.store');
Route::get('/editeur/edit/{editeur}', [categorieController::class, 'edit'])->name('editeur.edit');
Route::post('/editeur/update/{id}', [categorieController::class, 'update'])->name('editeur.update');
Route::post('/editeur/delete/{id}', [categorieController::class, 'destroy'])->name('editeur.destroy');

<?php

use App\Http\Controllers\auteurController;
use App\Http\Controllers\categorieController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\editeurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\livreController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\parametreController;
use App\Http\Controllers\empruntController;

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



//Dashboard
Route::get('/', [dashboardController::class, 'index'])->name('dashboard');

//livres CRUD
Route::get('/livre', [livreController::class, 'index'])->name('livre');
Route::get('/livre/create', [livreController::class, 'create'])->name('livre.create');
Route::post('/livre/create', [livreController::class, 'store'])->name('livre.store');
Route::get('/livre/edit/{livre}', [livreController::class, 'edit'])->name('livre.edit');
Route::post('/livre/update/{id}', [livreController::class, 'update'])->name('livre.update');
Route::post('/livre/delete/{id}', [livreController::class, 'destroy'])->name('livre.destroy');


// Client CRUD
Route::get('/client', [clientController::class, 'index'])->name('client');
Route::get('/client/create', [clientController::class, 'create'])->name('client.create');
Route::post('/client/create', [clientController::class, 'store'])->name('client.store');
Route::get('/client/edit/{client}', [clientController::class, 'edit'])->name('client.edit');
Route::post('/client/update/{id}', [clientController::class, 'update'])->name('client.update');
Route::post('/client/delete/{id}', [clientController::class, 'destroy'])->name('client.destroy');


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
Route::get('/editeur', [editeurController::class, 'index'])->name('editeur');
Route::get('/editeur/create', [editeurController::class, 'create'])->name('editeur.create');
Route::post('/editeur/create', [editeurController::class, 'store'])->name('editeur.store');
Route::get('/editeur/edit/{editeur}', [editeurController::class, 'edit'])->name('editeur.edit');
Route::post('/editeur/update/{id}', [editeurController::class, 'update'])->name('editeur.update');
Route::post('/editeur/delete/{id}', [editeurController::class, 'destroy'])->name('editeur.destroy');

//Parametre
Route::get('/parametre', [parametreController::class, 'index']) ->name('parametre');
Route::post('/parametre', [parametreController::class, 'update'])->name('parametre');

Route::get('/emprunt', [empruntController::class, 'index'])->name('emprunt');
Route::get('/emprunt/create', [empruntController::class, 'create'])->name('emprunt.create');
Route::get('/emprunt/edit/{id}', [empruntController::class, 'edit'])->name('emprunt.edit');
Route::post('/emprunt/update/{id}', [empruntController::class, 'update'])->name('emprunt.update');
Route::post('/emprunt/delete/{id}', [empruntController::class, 'destroy'])->name('emprunt.destroy');
Route::post('/emprunt/create', [empruntController::class, 'store'])->name('emprunt.store');

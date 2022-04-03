<?php

use App\Http\Controllers\auteurController;
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



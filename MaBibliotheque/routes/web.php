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
Route::get('/auteur/creer', [auteurController::class, 'create'])->name('auteur.creer');
Route::post('/auteur/creer', [auteurController::class, 'store'])->name('auteur.ajouter');


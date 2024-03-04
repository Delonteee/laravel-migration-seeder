<?php

use Illuminate\Support\Facades\Route;


//CONTROLLERS

use App\Http\Controllers\Guest\PageController;    
// usiamo il namespace che non é necessariamente un percorso fisico (presente in PageController.php) per importare la classe che ci serve
use App\Http\Controllers\Guest\MovieController;    


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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)

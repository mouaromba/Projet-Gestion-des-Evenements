<?php

use App\Http\Controllers\CommentairesController;
use Illuminate\Support\Facades\Auth;
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
    return view('site.welcome');
});

Route::get('apropos', function () {
    return view('site.apropos');
});

Route::get('evenement', function () {
    return view('site.evenement');
});

Route::get('programme', function () {
    return view('site.programme');
});

Route::get('quoi_de_neuf', function () {
    return view('site.quoi_de_neuf');
});

Route::get('ticket', function () {
    return view('site.ticket');
});

Route::get('sponsor', function () {
    return view('site.sponsor');
});

Route::get('contact', function () {
    return view('site.contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource( 'commentaires', 'CommentairesController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('liste_evenement', [EvenementController::class, 'index'])->name('liste');

// Route::get('formulaire_evenement', [EvenementController::class, 'create'])->name('formulaire');

// Route::post('insertion', [EvenementController::class, 'store'])->name('insertion');

// Route::post('liste_evenement', [EvenementController::class, 'destroy'])->name('liste');
Route::resource('evenement', EvenementController::class);

Route::get('supprimer_evenement/{id}', [EvenementController::class, 'destroy']);

// Route::get('modifier_evenement/{id}', [EvenementController::class, 'edit']);
<?php

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

Route::get('blog', function () {
    return view('site.blog');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

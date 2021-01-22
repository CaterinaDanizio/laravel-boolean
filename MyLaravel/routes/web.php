<?php

use App\Http\Controllers\MainController;
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
    return view('welcome');
});

// Salutare tutti gli utenti in inglese (statico, no variabili)

Route::get('/helloAll', function () {
    return view('home-en');
});

// Salutare utente per nome (variabile) in inglese
Route::get('/helloYou', function () {
    $name = 'Caterina';
    return view('home-en2', compact('name'));
});

// Salutare utente per nome (stessa variabile, stessa view, ma nome diverso) in inglese

Route::get('/helloYou2', function () {
    $name = 'Luca';
    return view('home-en2', compact('name'));
});

// Salutare tutti in spagnolo
Route::get('/holaTodos', 'MainController@hola');

// Salutare utente per nome (variabile) in spagnolo
Route::get('/holaTu', 'MainController@holaTu');

// Salutare utente per nome (stessa variabile, stessa view, ma nome diverso) in inglese

Route::get('/holaTu2', 'MainController@holaTu2');
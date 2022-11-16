<?php

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
    return view('index');
});

Route::get('/praias', function () {
    return view('praias');
})->name('praias');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/procurar', function () {
    return view('procurar');
})->name('procurar');

Route::get('/saida', function () {
    return view('saida');
})->name('saida');


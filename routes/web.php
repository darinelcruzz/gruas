<?php

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
    return view('admin');
});

Route::get('entradas', function () {
    return "Hola";
})->name('entries.show');

Route::get('entradas/crear', function () {
    return 'Adios';
})->name('entries.create');

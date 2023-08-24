<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// -----------------------> rehan <-----------------------------

Route::get('/profile/{id}')->name('profile');
Route::get('/allkpis');
Route::get('/kpisrole/{role}')->name('kpisrole');



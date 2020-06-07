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
    return view('welcome');
});

Route::get('/singles', function () {
    return view('singles');
});

Route::get('/doubles', function () {
    return view('doubles');
});

Route::post('/savesingles','singlescontroller@store');
Route::post('/savedoubles','doublescontroller@store');
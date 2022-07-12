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
    return view('HomePage');
});

Route::get('/html', function () {
    return view('html');
});

Route::get('/css', function () {
    return view('css');
});

Route::get('/js', function () {
    return view('js');
});

Route::get('/python', function () {
    return view('python');
});

Route::get('/php', function () {
    return view('php');
});

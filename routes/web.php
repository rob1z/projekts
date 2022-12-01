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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/csgo', function () {
    return view('csgo');
});

Route::get('/valorant', function () {
    return view('valorant');
});

Route::get('/rocketleague', function () {
    return view('rocketleague');
});

Route::get('/cspatch', function () {
    return view('/patch/cspatch');
});

Route::get('/valopatch', function () {
    return view('/patch/valopatch');
});
Route::get('/apitest', function () {
    return view('apitest');
});


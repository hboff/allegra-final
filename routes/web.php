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
    return view('index');
});
Route::get('/gewerbeimmobilien', function () {
    return view('gewerbeimmobilien');
});
Route::get('/grundstuecke-und-rechte', function () {
    return view('grundstuecke-und-rechte');
});
Route::get('/immobilienbewertung', function () {
    return view('immobilienbewerutng');
});
Route::get('/landwirtschaftliche-immobilien', function () {
    return view('landwirtschaftliche-immobilien');
});
Route::get('/sonderimmobilien', function () {
    return view('sonderimmobilien');
});
Route::get('/ueber-uns', function () {
    return view('ueber-uns');
});
Route::get('/wohnimmobilien', function () {
    return view('wohnimmobilien');
});
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
    return view('welcome');
});
Route::get('Tugas4', function () {
    return view('Tugas4');
});
Route::get('Praktikum2', function () {
    return view('Praktikum2');
});
Route::get('ETS', "ViewController@showETS");
Route::get('TugasPHP', "ViewController@showTugasPHP");
Route::get('kode', "ViewController@showkode");
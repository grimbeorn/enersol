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
    return view('index');
});

Route::get('/residencial', function () {
    return view('residencial');
});

Route::get('/industrial', function () {
    return view('industrial');
});

Route::get('/ahorro', function () {
    return view('ahorro');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contact', 'contactController@send');

Route::post('/data', 'dataController@send');

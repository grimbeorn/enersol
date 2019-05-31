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

Route::get('/energiasResidencial', function () {
    return view('energiasResidencial');
});

Route::get('/energiasIndustrial', function () {
    return view('energiasIndustrial');
});

Route::get('/cuanto', function () {
    return view('cuanto');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contact', 'contactController@send');

Route::post('/data', 'dataController@send');

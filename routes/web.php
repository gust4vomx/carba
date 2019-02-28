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

// Route::get('/', function() {
//     return view('layouts.construction');
// });

Route::resource('/', 'SuscriberController');

Route::get('/create', 'SuscriberController@create');

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/nosotros',function() {
    return view('layouts.about');
});

Route::get('/cursos', function() {
    return view('layouts.courses');
});

Route::get('/curso-detalle', function() {
    return 'Detalle del curso';
});
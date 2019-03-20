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

Route::resource('/', 'SuscriberController');

Route::get('/create', 'SuscriberController@create');

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/nosotros',function() {
    return view('layouts.about');
});

Route::get('/preescolar', function() {
    return view('layouts.preescolar');
});

Route::get('/primaria', function() {
    return view('layouts.primaria');
});

Route::get('/inscripciones', function() {
    return view('layouts.registrations');
});

Route::get('/instalaciones', function() {
    return view('layouts.instalaciones');
});

Route::get('/cursos', function() {
    return view('layouts.courses');
});

Route::get('/de-verano-carba', function() {
    return view('courses.summer-carba');
});

Route::get('/summer-camp-england-2019', function() {
    return view('courses.summer-camp');
});

Route::get('/regularizacion-de-ingles', function() {
    return view('courses.english-regularization');
});

Route::get('/nivelacion-de-alumnos', function() {
    return view('courses.levelling-of-students');
});

Route::get('/eventos', function () {
    return view('layouts.events');
});

Route::get('/detalles-evento', function () {
    return view('layouts.event-details');
});

Route::get('/contacto', function() {
    return view('layouts.contact');
});
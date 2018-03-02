<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('notes', function () {
    return "Estamos en notas";
});

Route::get('notes/create', function () {
    return view('notes');
});

Route::post('notes/create', function () {
    return "Procesando la entrada del formulario";
});

Route::get('test', 'TestController@index');

Route::get('test', ['Middleware' => 'test'], 'TestController@index');

/*
Route::get('notes/{note}', function ($note) {
    return $note;
})->where('note', '[0-9]+');
*/
Route::get('notes/{note}/{slug?}', function ($note, $slug = null) {
    dd($note, $slug);
})->where('note', '[0-9]+');

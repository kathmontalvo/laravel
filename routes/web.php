<?php
Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/products', 'ProductController@index'); //Listado
    Route::get('/products/create', 'ProductController@create'); //ver formulario
    Route::post('/products', 'ProductController@store'); //registra
    Route::get('/products/{id}/edit', 'ProductController@edit'); //edicion
    Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar
    Route::delete('/products/{id}', 'ProductController@destroy'); //eliminar

    Route::get('/products/{id}/images', 'ImageController@index'); //listado
    Route::post('/products/{id}/images', 'ImageController@store'); //registrar
    Route::delete('/products/{id}/images', 'ImageController@destroy'); //eliminar
});


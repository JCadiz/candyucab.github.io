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
Route::get('/','FrontController@home')->name('home');
Route::get('/novedades','FrontController@novedades')->name('novedades');
Route::get('/tienda','FrontController@tienda')->name('tienda');
Route::get('/promociones','FrontController@promociones')->name('promociones');
Route::get('/about','FrontController@about')->name('about');
Route::get('/contact','FrontController@contact')->name('contact');

Auth::routes();
Route::prefix('admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('admin.home');

    Route::resource('candyP', 'CandyPointController')->names([
        'index' => 'candy2',
        'create' => 'candyP.create',
        'store' => 'candyP.store',
        'show' => 'candyP.show',
        'edit' => 'candyP.edit',
        'update' => 'candyP.update',
        'destroy' => 'candyP.destroy'
    ]);

    Route::resource('natural', 'NaturalController')->names([
        'index' => 'natural',
        'create' => 'natural.create',
        'store' => 'natural.store',
        'show' => 'natural.show',
        'edit' => 'natural.edit',
        'update' => 'natural.update',
        'destroy' => 'natural.destroy'
    ]);

    Route::resource('juridico', 'JuridicoController')->names([
        'index' => 'juridico',
        'create' => 'juridico.create',
        'store' => 'juridico.store',
        'show' => 'juridico.show',
        'edit' => 'juridico.edit',
        'update' => 'juridico.update',
        'destroy' => 'juridico.destroy'
    ]);

    Route::resource('oferta', 'OfertaController')->names([
        'index' => 'oferta2',
        'create' => 'oferta.create',
        'store' => 'oferta.store',
        'show' => 'oferta.show',
        'edit' => 'oferta.edit',
        'update' => 'oferta.update',
        'destroy' => 'oferta.destroy'
    ]);

    Route::resource('prueba', 'PruebaController')->names([
        'index' => 'prueba2',
        'create' => 'prueba.create',
        'store' => 'prueba.store',
        'show' => 'prueba.show',
        'edit' => 'prueba.edit',
        'update' => 'prueba.update',
        'destroy' => 'prueba.destroy'
    ]);

    Route::resource('tienda', 'TiendaController')->names([
        'index' => 'tienda2',
        'create' => 'tienda.create',
        'store' => 'tienda.store',
        'show' => 'tienda.show',
        'edit' => 'tienda.edit',
        'update' => 'tienda.update',
        'destroy' => 'tienda.destroy'
    ]);

});

Route::post('email', 'FrontController@send')->name('send.email');

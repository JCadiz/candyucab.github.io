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
Route::get('/cart/{id}', 'FrontController@cart')->name('cart');
Route::get('/checkout/{id}', 'FrontController@checkout')->name('checkout');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function () {

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

Route::group(['prefix' => 'natural'], function () {
  Route::get('/login', 'NaturalAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'NaturalAuth\LoginController@login');
  Route::post('/logout', 'NaturalAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'NaturalAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'NaturalAuth\RegisterController@register');

  Route::post('/password/email', 'NaturalAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'NaturalAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'NaturalAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'NaturalAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'juridico'], function () {
  Route::get('/login', 'JuridicoAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'JuridicoAuth\LoginController@login');
  Route::post('/logout', 'JuridicoAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'JuridicoAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'JuridicoAuth\RegisterController@register');

  Route::post('/password/email', 'JuridicoAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'JuridicoAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'JuridicoAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'JuridicoAuth\ResetPasswordController@showResetForm');
});

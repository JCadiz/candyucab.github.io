<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('juridico')->user();

    //dd($users);

    return view('juridico.home');
})->name('home');


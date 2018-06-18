<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('natural')->user();

    //dd($users);

    return view('natural.home');
})->name('home');


<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('plaint')->user();

    //dd($users);

    return view('plaint.home');
})->name('home');


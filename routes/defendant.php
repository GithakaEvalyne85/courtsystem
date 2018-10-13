<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('defendant')->user();

    //dd($users);

    return view('defendant.home');
})->name('home');


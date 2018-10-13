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
Route::get('/admin',function(){
  return view('Admin.app');
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'plaint'], function () {
  Route::get('/login', 'PlaintAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'PlaintAuth\LoginController@login');
  Route::post('/logout', 'PlaintAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'PlaintAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'PlaintAuth\RegisterController@register');

  Route::post('/password/email', 'PlaintAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'PlaintAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'PlaintAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'PlaintAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'defendant'], function () {
  Route::get('/login', 'DefendantAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'DefendantAuth\LoginController@login');
  Route::post('/logout', 'DefendantAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'DefendantAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'DefendantAuth\RegisterController@register');

  Route::post('/password/email', 'DefendantAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'DefendantAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'DefendantAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'DefendantAuth\ResetPasswordController@showResetForm');
});

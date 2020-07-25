<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false]);

Route::get('logout-test', 'HomeController@home');
Route::get('', 'HomeController@index')->name('home');
Route::post('order', 'HomeController@order')->name('order');
Route::post('payment', 'HomeController@payment')->name('payment');
Route::get('auth/redirect/{provider}', 'Auth\SocialController@redirect');
Route::get('auth/callback/{provider}', 'Auth\SocialController@callback');
Route::get('logout', 'HomeController@logout');

Route::get('home', function () {
    return redirect('/');
});

Route::view('/admin', 'admin.produk');

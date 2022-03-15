<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'BankDetailController@bankView')->name('home');
    
    Route::get('/add_details', 'BankDetailController@adddetail');
    Route::post('/create', 'BankDetailController@store');


    Route::get('/bankEdit/{id}', 'BankDetailController@edit');
    Route::post('/bankEdit/{id}', 'BankDetailController@editStore');
    Route::get('/bankDelete/{id}', 'BankDetailController@destroy');
});

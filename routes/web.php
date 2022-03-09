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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'home')->name('home')->middleware('auth');
Route::prefix('admin')->name('admin.')->middleware('theme:admin')->group(function(){
    Route::view('/', 'home')->name('home')->middleware('auth:admin');
    require __DIR__ . '/fortify-admin.php';

});

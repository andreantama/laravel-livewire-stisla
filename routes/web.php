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

Route::get('/authorization/admin', function () {
    return view('admin._auth');
});
Route::get('/register/admin', function () {
    return view('admin._register');
});
Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => 'admin'], function (){

});
Route::get('/', function () {
    return view('welcome');
});

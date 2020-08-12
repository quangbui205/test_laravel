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
    return view('home');
});



Route::get('/caculation',function (){
    return view('math');
})->name('input.number')->middleware('auth');
Route::post('/caculation', 'CaculController@cacul')->name('cacul.cacul');
Route::get('loginAdmin','LoginController@login')->name('login.login');
Route::post('loginUser','LoginController@checkLogin')->name('login.checkLogin');
Route::get('dashboard',function (){
    return view('admin/dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

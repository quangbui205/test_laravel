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

Route::get('/login', function (){
    return view('login');
});
Route::post('/login', function (\Illuminate\Http\Request $request){
    if(($request->username == 'admin') && ($request->password=='admin'))
        {
            return view('home');
        }
    else
    {
        return view('loginFail');
    }
});

Route::get('/caculation',function (){
    return view('math');
});
Route::post('/caculation', function (\Illuminate\Http\Request $request){
    $total = $request->num1 + $request->num2;
    return view('showCacula',compact(['total']));
});

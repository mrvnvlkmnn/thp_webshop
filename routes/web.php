<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('layout');
})->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/shop/{itemID}', function (Request $request, $itemID){
   return view('shop')->with($itemID);
});

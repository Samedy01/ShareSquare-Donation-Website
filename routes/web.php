<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('Item_Donation\done_donated');
});
Route::get('/item_donation', function () {
    return view('Item_Donation\item_donation');
});

Route::get('/test_tailwind', function () {
    return view('test_tailwind');
});
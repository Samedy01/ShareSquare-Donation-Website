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
    return view('welcome');
});

Route::get('/test_tailwind', function () {
    return view('test_tailwind');
});

Route::get('/campaigns/{user_id}/show/{campaign_id}', function () {
    return view('donations.campaign_profile');
});
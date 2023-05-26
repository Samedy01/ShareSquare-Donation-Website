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
Route::get('/browse', function () {
    return view('browse');
});
Route::get('/create-new-campaign', function () {
    return view('campaign_cash_type');
});

Route::get('/test_tailwind', function () {
    return view('test_tailwind');
});

Route::get('/donations/campaign_profile', function () {
    return view('donations.campaign_profile');
});
Route::get('/testUpload', function () {
    return view('tests.testuploadfile');
});

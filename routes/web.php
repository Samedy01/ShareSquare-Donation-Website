<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyProfileController;

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

// My Profile Controller
Route::get('/profile/overview', [MyProfileController::class, 'overview'])->name('overview');

Route::get('/profile/mycampaign', [MyProfileController::class, 'myCampaign'])->name('mycampaign');

Route::get('/profile/history', [MyProfileController::class, 'history'])->name('history');

Route::get('/profile/following', [MyProfileController::class, 'following'])->name('following');

Route::get('/profile/follower', [MyProfileController::class, 'follower'])->name('follower');

Route::get('/profile/editprofile', [MyProfileController::class, 'editprofile'])->name('editprofile');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_tailwind', function () {
    return view('test_tailwind');
});

Route::get('/donations/campaign_profile', function () {
    return view('donations.campaign_profile');
});

Route::get('test', function() {
    return view('test');
});



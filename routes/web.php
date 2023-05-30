<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\CampaignCategoryController;
use App\Http\Controllers\CampaignController;

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
//Route::get('/create-new-campaign', function () {
//    return view('campaigns.create');
//});

Route::get('/test_tailwind', function () {
    return view('test_tailwind');
});

Route::get('/donations/campaign_profile', function () {
    return view('donations.campaign_profile');
});
Route::get('/testUpload', function () {
    return view('tests.testuploadfile');
});
Route::get('/testGoogleMap', function () {
    return view('tests.testGoogleMap');
});

Route::resource('item_categories', ItemCategoryController::class);
Route::resource('campaign_categories', CampaignCategoryController::class);
Route::resource('campaigns', CampaignController::class);

//Route::post('')




// 
// campaigns
Route::get('/campaigns')->name('campaigns.index'); // all campaigns

Route::get('/campaigns/{user_id}')->name('campaigns.user.index'); // all campaings of a user

Route::get('/campaigns/{user_id}/show/{campaign_id}')->name('campaigns.show'); // show the details of a campaign (campaign profile)

Route::get('/campaigns/{user_id}/create')->name('campaigns.create'); // the campaign form

Route::post('/campaigns/{user_id}')->name('campaigns.store'); // post a campaign

Route::delete('/campaigns/{user_id}/{campaign_id}')->name('campaigns.destroy'); // delete a campaign

Route::get('/campaigns/{user_id}/edit/{campaign_id}')->name('campaigns.edit'); // the campaign update form

Route::post('/campaigns/{user_id}/update/{campaign_id}')->name('campaigns.update'); // update the campaign

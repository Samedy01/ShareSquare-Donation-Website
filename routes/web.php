<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\CampaignCategoryController;
use App\Http\Controllers\CampaignController;
// Vortey
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\OtherUserProfileController;

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


// Default




// Pech
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/donations/campaign_profile', function () {
    return view('donations.campaign_profile');
});

require __DIR__.'/auth.php';







// Panha
Route::get('/browse', function () {
    return view('browse');
});
//Route::get('/create-new-campaign', function () {
//    return view('campaigns.create');
//});

Route::get('/test_tailwind', function () {
    return view('test_tailwind');
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





// Vortey
// My Profile Controller
Route::get('/profile/overview', [MyProfileController::class, 'overview'])->name('overview');

Route::get('/profile/mycampaign', [MyProfileController::class, 'myCampaign'])->name('mycampaign');

Route::get('/profile/history', [MyProfileController::class, 'history'])->name('history');

Route::get('/profile/following', [MyProfileController::class, 'following'])->name('following');

Route::get('/profile/follower', [MyProfileController::class, 'follower'])->name('follower');

Route::get('/profile/editprofile', [MyProfileController::class, 'editprofile'])->name('editprofile');

Route::get('/profile/mycampaign/allcampaign', [MyProfileController::class, 'allCampaign'])->name('allCampaign');

Route::get('/profile/mycampaign/closedcampaign', [MyProfileController::class, 'closedcampaign'])->name('closedcampaign');

Route::get('/profile/mycampaign/reachedgoal', [MyProfileController::class, 'reachedgoal'])->name('reachedgoal');

Route::get('/profile/mycampaign/unreachedgoal', [MyProfileController::class, 'unreachedgoal'])->name('unreachedgoal');

Route::get('/profile/mycampaign/draft', [MyProfileController::class, 'draft'])->name('draft');


// Other Profile
Route::get('/otherprofile/overview', [OtherUserProfileController::class, 'overview'])->name('user_overview');

Route::get('/otherprofile/campaign', [OtherUserProfileController::class, 'campaign'])->name('user_campaign');

Route::get('/otherprofile/history', [OtherUserProfileController::class, 'history'])->name('user_history');

Route::get('/otherprofile/following', [OtherUserProfileController::class, 'following'])->name('user_following');

Route::get('/otherprofile/follower', [OtherUserProfileController::class, 'follower'])->name('user_follower');

Route::get('/otherprofile/usercampaign/allcampaign', [OtherUserProfileController::class, 'allCampaign'])->name('user_allCampaign');

Route::get('/otherprofile/usercampaign/closedcampaign', [OtherUserProfileController::class, 'closedcampaign'])->name('user_closedcampaign');

Route::get('/otherprofile/usercampaign/reachedgoal', [OtherUserProfileController::class, 'reachedgoal'])->name('user_reachedgoal');

Route::get('/otherprofile/usercampaign/unreachedgoal', [OtherUserProfileController::class, 'unreachedgoal'])->name('user_unreachedgoal');

Route::get('/otherprofile/usercampaign/draft', [OtherUserProfileController::class, 'draft'])->name('user_draft');






// Samedy
Route::get('/donations/campaign_profile', function () {
    return view('donations.campaign_profile');
});




// Saovty
Route::get('/followers', function () {
    return view('Notification.followers');
});
Route::get('/following', function () {
    return view('Notification.following');
});
Route::get('/new_notification', function () {
    return view('Notification.new_ntf');
});
Route::get('/', function () {
    return view('setting');
});
Route::get('/done_donated', function () {
    return view('Item_Donation.done_donated');
});
Route::get('/item_donation', function () {
    return view('Item_Donation.item_donation');
});

























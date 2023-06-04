<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\CampaignCategoryController;
use App\Http\Controllers\CampaignController;
// Vortey
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
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
Route::get('/', [HomeController::class,'index'])->name('dashboard');//->middleware(['auth', 'verified'])->name('dashboard');

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


Route::get('/tests', function () {
    return view('test');
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
Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns.index'); // all campaigns

Route::get('/campaigns/show/{campaign_id}', [CampaignController::class, 'show'])->name('campaigns.show');

Route::get('/campaigns/{user_id}')->name('campaigns.user.index'); // all campaings of a user

Route::get('/campaigns/{user_id}/show/{campaign_id}', [CampaignController::class, 'show_user'])->name('campaigns.user.show'); // show the details of a campaign (campaign profile)

Route::get('/campaigns/create',[CampaignController::class,'create'])->middleware(['auth', 'verified'])->name('campaigns.create'); // the campaign form

//Route::post('/campaigns/{user_id}')->name('campaigns.store'); // post a campaign

Route::delete('/campaigns/destroy/{campaign_id}'); // delete a campaign

Route::get('/campaigns/{user_id}/edit/{campaign_id}')->name('campaigns.edit'); // the campaign update form

Route::post('/campaigns/{user_id}/update/{campaign_id}')->name('campaigns.update'); // update the campaign

//Route::post('/campaigns/store',[CampaignController::class, 'store'])->name('create');
Route::post('/campaigns/store', [CampaignController::class,'store'])->name('campaigns.store');



// Vortey
// My Profile Controller
Route::get('/profile/overview', [MyProfileController::class, 'overview'])->name('profile.overview');

Route::get('/profile/mycampaign/{user_id}', [MyProfileController::class, 'myCampaign'])->name('mycampaign');

Route::get('/profile/history', [MyProfileController::class, 'history'])->name('history');

Route::get('/profile/following', [MyProfileController::class, 'following'])->name('following');

Route::get('/profile/follower', [MyProfileController::class, 'follower'])->name('follower');

Route::get('/profile/editprofile', [MyProfileController::class, 'editprofile'])->name('editprofile');









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
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/done_donated', function () {
    return view('Item_Donation.done_donated');
});
Route::get('/item_donation', function () {
    return view('Item_Donation.item_donation');
});


/*panha*/
Route::get('/manage-campaign-list',[CampaignController::class,'manage']);
Route::post('stripe',[StripePaymentController::class,'paymentStripe'])->name('donate_cash.paymentstripe');
Route::get('stripe/paymentRequest',[StripePaymentController::class,'paymentRequest'])->name('paystripe');
Route::get('/search',[SearchController::class,'searchUsersAndCampaigns'])->name('search');

Route::get('/test_map_box',function (){
    return view('tests.testMapBox');
});



















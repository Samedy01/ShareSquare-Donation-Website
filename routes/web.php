<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\CampaignCategoryController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CampaignDonatedItemController;
// Vortey
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

//panha
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CampaignDonatedCashController;
use App\Http\Controllers\UserController;
use App\Models\CampaignDonatedCash;
use App\Http\Controllers\OtherUserProfileController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Authenticate;

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
Route::get('/', [HomeController::class,'index'])->name('dashboard');
Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/donations/campaign_profile', function () {
    return view('donations.campaign_profile');
});








// Panha
// Route::get('/browse', function () {
//     return view('browse');
// });
//Route::get('/create-new-campaign', function () {
//    return view('campaigns.create');
//});

// Route::get('/test_tailwind', function () {
//     return view('test_tailwind');
// });


// Route::get('/tests', function () {
//     return view('test');
// });
// Route::get('/testGoogleMap', function () {
//     return view('tests.testGoogleMap');
// });

Route::resource('item_categories', ItemCategoryController::class);
Route::resource('campaign_categories', CampaignCategoryController::class);
Route::resource('campaigns', CampaignController::class);


//Route::post('')




//
// campaigns
Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns.index'); // all campaigns

// Samedy
Route::get('/campaigns/show/{campaign_id}', [CampaignController::class, 'show'])->name('campaigns.show');

Route::get('/campaigns/show/{campaign_id}/report', [CampaignController::class, 'report'])->name('campaigns.show.report');

Route::get('/campaigns/show/{campaign_id}/comments', [CampaignController::class, 'comments'])->name('campaigns.show.comments');

Route::get('/campaigns/show/{campaign_id}/donators', function() {
    return 'hello';
})->name('campaigns.show.donators');

Route::get('/campaigns/show/{campaign_id}/donators', [CampaignDonatedCashController::class, 'index'])->name('campaigns.show.donators');

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

Route::get('/profile/mycampaign/allcampaign', [MyProfileController::class, 'allCampaign'])->name('allCampaign');

Route::get('/profile/mycampaign/closedcampaign', [MyProfileController::class, 'closedcampaign'])->name('closedcampaign');

Route::get('/profile/mycampaign/reachedgoal', [MyProfileController::class, 'reachedgoal'])->name('reachedgoal');

Route::get('/profile/mycampaign/unreachedgoal', [MyProfileController::class, 'unreachedgoal'])->name('unreachedgoal');

Route::get('/profile/mycampaign/draft', [MyProfileController::class, 'draft'])->name('draft');


// Other Profile
Route::get('/otherprofile/{id}/overview/', [OtherUserProfileController::class, 'overview'])->name('user_overview');

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
// Route::get('/followers', function () {
//     return view('Notification.followers');
// });
// Route::get('/following', function () {
//     return view('Notification.following');
// });
// Route::get('/new_notification', function () {
//     return view('Notification.new_ntf');
// });
// Route::get('/setting', function () {
//     return view('setting');
// });
// Route::get('/done_donated', function () {
//     return view('Item_Donation.done_donated');
// });
// Route::get('/item_donation', function () {
//     return view('Item_Donation.item_donation');
// });
//saovty
Route::get('/campaigns/donate_item/{campaign_id}',[CampaignDonatedItemController::class,'donateItem'])->name('campaigns.donate_item');

/*Route::get('/', function(){
    return view('comment');
});*/


Route::get('/item_donation',[CampaignDonatedItemController::class, 'itemDonation']);

Route::post('/campaign/perform_donate',[CampaignDonatedItemController::class,'performDonatedItem'])->name('compaigns.perform_donate_item');
//Route::post('/done_donated_items',[CampaignDonatedItemController::class,'performDonatedItem'])->name('compaigns.perform_donate_item');

require __DIR__.'/auth.php';


/*panha*/
Route::get('/manage-campaign-list',[CampaignController::class,'manage']);

Route::get('stripe',[StripePaymentController::class,'paymentStripe'])->name('donate_cash.paymentstripe');

Route::get('stripe/paymentRequest',[StripePaymentController::class,'paymentRequest'])->name('paystripe');

Route::get('/search',[SearchController::class,'searchUsersAndCampaigns'])->name('search');

Route::get('/test_map_box',function (){
    return view('tests.testMapBox');
});

Route::get('/campaigns/cash_donation/{campaign_id}',[CampaignController::class,'donateCash'])->name('campaigns.donate_cash');

Route::post('/campaigns/donate_now_with_cash',[CampaignController::class,'donateNowWithCash'])->name('campaign.donate_now_cash');

Route::post('/user/care_campaign',[CampaignController::class,'userCareCampaign'])->name('campaign.user_care_campaign');


Route::get('/users/profile/{user_id}',[UserController::class,'viewOtherProfile'])->name('users.view_other_user');

Route::get('campaigns/comment/{campaign_id}',[CampaignController::class,'comment'])->name('campaigns.comment');

Route::post('/campaigns/user/comment',[CampaignController::class,'userComment'])->name('campaigns.user.comment');


///////////////////////////////////////////////////////////////////////////////
// for admin part
//
Route::middleware([Authenticate::class, Admin::class])->group(function () {

    Route::resource('admins',AdminController::class);

    Route::post('/admins/campaignDelete',[AdminController::class,'campaignDelete']);

    Route::get('/admin/campaigns',[AdminController::class,'campaigns'])->name('admin.campaigns');

    Route::get('admin/view_campaign/{campaign_id}',[AdminController::class,'viewCampaign'])->name('admin.view_campaign');

    Route::post('/admin/approve_campaign',[AdminController::class,'approveCampaign']);

    Route::post('/admin/reject_campaign',[AdminController::class,'rejectCampaign']);

    Route::get('/admin/campaign_categories',[AdminController::class,'campaignCategories'])->name('admin.campaignCategories');

    Route::get('/admin/edit_campaign_category/{campaign_category_id}',[AdminController::class,'editCampaignCategory'])->name('admin.editCampainCategory');

    Route::get('/admin/create_campaign_category',[AdminController::class,'campaignCategoryCreate'])->name('admin.createCampaignCategory');

    Route::post('/admin/store_campaign_category',[AdminController::class,'storeCampaignCategory'])->name('admin.storeCampaignCategory');

    Route::post('/admin/update_campaign_category/{campaign_category_id}',[AdminController::class,'updateCampaignCategory'])->name('admin.updateCampaignCategory');

    Route::post('/admin/delete_campaign_category/{campaign_category_id}',[AdminController::class,'deleteCampaignCategory'])->name('admin.deleteCampaignCategory');
    

    //for item category
    Route::get('/admin/item_categories',[AdminController::class,'campaignItemCategories'])->name('admin.item_categories.index');

    Route::get('/admin/create_item_categories',[AdminController::class,'createItemCategory'])->name('admin.item_categories.create');
});
//////////////////////////////////////////////////////////////////////////////////////














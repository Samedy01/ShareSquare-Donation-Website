<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignCategory;
use App\Models\CampaignDonatedCash;
use App\Models\CampaignDropOffLocation;
use App\Models\CampaignImage;
use App\Models\CampaignSubtitle;
use App\Models\Image;
use App\Models\ItemCategory;
use App\Models\User;
use App\Models\CampaignAdditionalContact;

use App\Models\UserCommentCampaign;
use App\Models\UserLoveCampaign;
use App\Models\UserViewCampaign;
use App\View\Components\TopDonorCard;
use Auth;
use Exception;
use Illuminate\Cache\CacheManager;
use Illuminate\Http\Request;
use Stripe\Exception\ApiErrorException;
use Stripe\Exception\CardException;
use Stripe\StripeClient;

class CampaignController extends Controller
{

    public function manage(Request $request){
        $campaigns = Campaign::with('campaignCategory','itemCategory')
            ->whereNull('deleted_at')
            ->get();
        $userId = Auth::user()->id;
//        dd($campaigns);
        return view('campaigns.manage_campaign_list',compact('campaigns','userId'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //TODO query only campaign with success status
        $campaignCategories = CampaignCategory::all();
        $selectedCategories = $request->input('campaign_category', []);
        $selectedCampaignTypes = $request->input('campaign_type', []);
        $otherFilterTypes = $request->input('other_filter', []);
        $searchKey = $request->input('searchCampaignOrUser');
        $today = date('Y-m-d');
//        dd($searchKey);
        if(!empty($searchKey)){
            $selectedCategories = [];
            $selectedCampaignTypes = [];
            $otherFilterTypes = [];

//            dd($campaignCategories);
            $campaigns = Campaign::with('campaignCategory')
                ->where('is_raising', '=', 1)
                ->where('title','LIKE','%'.$searchKey.'%')
                ->where('status','=','success')
                ->where('start_date', '<=', $today)
                ->where('end_date', '>=', $today)
                ->whereNotNull('campaign_category_id')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            return view('campaigns.index',
                compact('campaigns', 'campaignCategories','searchKey','selectedCategories','selectedCampaignTypes','otherFilterTypes'));
        }

//        dd($otherFilterTypes);
        if (!empty($selectedCategories)) {
//            dd('hi');
            $selectedCategoriesInt = array_map('intval', $selectedCategories);
//            dd($selectedCategoriesInt);

            $campaigns = Campaign::with('campaignCategory')
                ->where('is_raising', '=', 1)
                ->whereNotNull('campaign_category_id')
                ->where('status','=','success')
                ->whereIn('campaign_category_id', $selectedCategoriesInt)
                ->where('start_date', '<=', $today)
                ->where('end_date', '>=', $today)
                ->orderBy('created_at', 'desc')
//                ->limit(10)
                ->paginate(10);
//            dd(empty($otherFilterTypes));
            if (!empty($selectedCampaignTypes)) {
                $diff = array_diff(['item', 'cash'], $selectedCampaignTypes);
//
                if (count($diff) == 0) {
                    // mean that both cash and item is checked
                    $campaigns = Campaign::with('campaignCategory')
                        ->where('is_raising', '=', 1)
                        ->whereNotNull('campaign_category_id')
                        ->where('status','=','success')
                        ->whereIn('campaign_category_id', $selectedCategoriesInt)
                        ->whereDate('start_date', '<=', $today)
                        ->whereDate('end_date', '>=', $today)
                        ->where(function ($query) {
                            $query->where('is_cash', '=', 1)->orWhere('is_item', '=', 1);
                        })
                        ->orderBy('created_at', 'desc')
//                        ->limit(10)
                        ->paginate(10);

                } else if (count($diff) == 1) {
                    // check if it is cash or item
//                    dump($selectedCampaignTypes[0] == 'cash');
                    if ($selectedCampaignTypes[0] == 'cash') {
//                        dd('hi');
                        $campaigns = Campaign::with('campaignCategory')
                            ->where('is_raising', '=', 1)
                            ->where('status','=','success')
                            ->whereNotNull('campaign_category_id')
                            ->whereIn('campaign_category_id', $selectedCategoriesInt)
                            ->whereDate('start_date', '<=', $today)
                            ->whereDate('end_date', '>=', $today)
                            ->where('is_cash', '=', 1)
                            ->orderBy('created_at', 'desc')
//                            ->limit(10)
                            ->paginate(10);
                    } else if ($selectedCampaignTypes[0] == 'item') {
                        $campaigns = Campaign::with('campaignCategory', 'itemCategory')
                            ->where('is_raising', '=', 1)
                            ->whereNotNull('campaign_category_id')
                            ->where('status','=','success')
                            ->whereDate('start_date', '<=', $today)
                            ->whereDate('end_date', '>=', $today)
                            ->whereIn('campaign_category_id', $selectedCategoriesInt)
                            ->where('is_item', '=', 1)
                            ->orderBy('created_at', 'desc')
//                            ->limit(10)
                            ->paginate(10);
                    }
                }
//                dd($campaigns);
            }
        } else {
//            dd('no select category');
            $campaigns = Campaign::with('campaignCategory')
                ->whereNotNull('campaign_category_id')
                ->orderBy('created_at', 'desc')
                ->where('status','=','success')
                ->where('start_date', '<=', $today)
                ->where('end_date', '>=', $today)
//                ->limit(5)
                ->paginate(10);
            $diff = array_diff(['item', 'cash'], $selectedCampaignTypes);
            if (count($diff) == 0) {
                // mean that both cash and item is checked
                $campaigns = Campaign::with('campaignCategory')
                    ->where('is_raising', '=', 1)
                    ->whereNotNull('campaign_category_id')
                    ->where('status','=','success')
                    ->whereDate('start_date', '<=', $today)
                    ->whereDate('end_date', '>=', $today)
                    ->where(function ($query) {
                        $query->where('is_cash', '=', 1)->orWhere('is_item', '=', 1);
                    })
                    ->orderBy('created_at', 'desc')
//                        ->limit(10)
                    ->paginate(10);
            } else if (count($diff) == 1) {
                // check if it is cash or item
//                dump($selectedCampaignTypes[0] == 'cash');
                if ($selectedCampaignTypes[0] == 'cash') {
                    $campaigns = Campaign::with('campaignCategory')
                        ->where('is_raising', '=', 1)
                        ->whereNotNull('campaign_category_id')
                        ->where('status','=','success')
                        ->whereDate('start_date', '<=', $today)
                        ->whereDate('end_date', '>=', $today)
                        ->where('is_cash', '=', 1)
                        ->orderBy('created_at', 'desc')
//                            ->limit(10)
                        ->paginate(10);
                    if (!empty($otherFilterTypes)) {
                        //dump($otherFilterTypes);
                        $otherFilterDiff = array_diff(['top_raising', 'new'], $otherFilterTypes);
//                      dd(count($otherFilterDiff));
                        if (count($otherFilterDiff) == 0) {
                            $campaigns = Campaign::with('campaignCategory')
                                ->where('is_raising', '=', 1)
                                ->where('raising_cash_amount_collected', '>', 0)
                                ->whereDate('start_date', '<=', $today)
                                ->whereDate('end_date', '>=', $today)
                                ->whereNotNull('campaign_category_id')
                                ->where('status','=','success')
                                ->orderBy('raising_cash_amount_collected', 'desc')
                                ->orderBy('created_at', 'asc')
//                                ->limit(20)
                                ->paginate(10);
                        } else {
//                      dd('hello');
                            $campaigns = Campaign::with('campaignCategory')
                                ->where('is_raising', '=', 1)
                                ->where('raising_cash_amount_collected', '>', 0)
                                ->whereDate('start_date', '<=', $today)
                                ->whereDate('end_date', '>=', $today)
                                ->whereNotNull('campaign_category_id')
                                ->where('status','=','success')
                                ->orderBy('raising_cash_amount_collected', 'desc')
//                                ->orderBy('raising_cash_amount_collected','desc')
//                                ->limit(20)
                                ->paginate(10);
                        }
                    }
                } else if ($selectedCampaignTypes[0] == 'item') {
                    $campaigns = Campaign::with('campaignCategory', 'itemCategory')
                        ->where('is_raising', '=', 1)
                        ->whereDate('start_date', '<=', $today)
                        ->whereDate('end_date', '>=', $today)
                        ->whereNotNull('campaign_category_id')
                        ->where('status','=','success')
                        ->where('is_item', '=', 1)
                        ->orderBy('created_at', 'desc')
//                            ->limit(10)
                        ->paginate(10);
                }
            }
        }

//        dd($campaigns);
        return view('campaigns.index', compact('campaigns',
            'campaignCategories',
            'selectedCategories',
            'selectedCampaignTypes',
            'otherFilterTypes'
        ));
    }

    private function __get_top_donors($campaign_id) {
        return CampaignDonatedCash::with('user')
        ->where('campaign_id', $campaign_id)
        ->orderBy('total_amount', 'desc')
        ->limit(2)
        ->get();
    }

    public function show($campaign_id)
    {
        $campaign = Campaign::findOrFail($campaign_id);

        $this->__increaseNumOfView($campaign_id);
        $user = User::findOrFail($campaign->user_id);
        $users = User::all();
        $top_donors = $this->__get_top_donors($campaign_id);

        $isLoveCampaign = null;
        if (Auth::user()){
            $isLoveCampaign = UserLoveCampaign::where('user_id', '=',Auth::user()->id)
                ->where('campaign_id','=',$campaign_id)
                ->first();
        }
        /*Query get two person donate the most*/
        $topDonors = CampaignDonatedCash::with('user')
            ->orderBy('original_amount','desc')
            ->limit(2)
            ->get();

//        dd($topDonors);
        return view('campaigns.show', [
            'campaign' => $campaign,
            'user' => $user,
            'top_donors' => $top_donors,
            'test_var1' => 'test message camp controlller',
        ]);
    }

    public function report($campaign_id) {
        $campaign = Campaign::findOrFail($campaign_id);
        $user = User::findOrFail($campaign->user_id);

        return view('campaigns.report', [
            'campaign' => $campaign,
            'user' => $user,
            'top_donors' => $this->__get_top_donors($campaign_id),
        ]);
    }

    public function comments($campaign_id) {
        $campaign = Campaign::findOrFail($campaign_id);

        $user = User::findOrFail($campaign->user_id);

        return view('campaigns.comments', [
            'campaign' => $campaign,
            'user' => $user,
            'top_donors' => $this->__get_top_donors($campaign_id),
        ]);
    }

    public function donators($campaign_id) {
        $campaign = Campaign::findOrFail($campaign_id);

        $user = User::findOrFail($campaign->user_id);

        return view('campaigns.donators', [
            'campaign' => $campaign,
            'user' => $user,
            // 'isLoveCampaign' => $isLoveCampaign,
            'top_donors' => $this->__get_top_donors($campaign_id),

        ]);
    }

    private function __increaseNumOfView($campaign_id){
        $campaign = Campaign::findOrFail($campaign_id);
        $campaign->number_of_view += 1;
//        dd(!Auth::user());
        if(!Auth::user()){
            $campaign->save();
            return;
        }
        /*Save to db of what register user is view*/

        $userViewCampaign = new UserViewCampaign();
        $userViewCampaign->user_id = Auth::user()->id;
        $userViewCampaign->campaign_id = $campaign_id;
        $userViewCampaign->is_view = true;
        $isSaved = UserViewCampaign::create($userViewCampaign->toArray());
       // debug($isSaved);
        $campaign->save();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $campaignCategories = CampaignCategory::all();
        $itemCategories = ItemCategory::where('is_enabled','=',1)->get();
        return view('campaigns.create', compact('campaignCategories', 'itemCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campaign = new Campaign();
//        debug($itemCategory);
        //dd($request->all());
//        dd(isset($request['campaign_goal']) && !empty($request['campaign_goal']));
        $userId = Auth::user()->id;
        //check the campaign if it is raise or donating
        $campaignType = $request['campaign_type'];

        $campaign->user_id = $userId;
        $campaign->title = isset($request['campaign_title']) ? $request['campaign_title'] : '';

        if (isset($request['campaign_summary'])) {
            $campaign->summary = $request['campaign_summary'];
        }
        if (isset($request['campaign_purpose'])) {
            $campaign->purpose = $request['campaign_purpose'];
        }
        if (isset($request['campaign_goal'])) {
            $campaign->goal = $request['campaign_goal'];
        }
        $campaign->campaign_category_id = $request['campaign_category'];
        $campaign->is_raising = false;
        if ($campaignType == 'raising') {
            $campaign->is_raising = false;
            $campaign->is_cash = false;
            if ($request['raising_option'] == 'cash') {
                $campaign->is_cash = true;
                $campaign->payment_option = $request['payment_option'];
                $campaign->payment_account_number = $request['payment_account_number'];

            } else {
                // Item is accepted
                $campaign->is_item = true;
                /*check condition of item category here*/
                $itemCategoryName = $request['item_category_name'];
                /*check if this item name exit*/
                $itemCategory = ItemCategory::where('name','=',$itemCategoryName)->first();
                if($itemCategory){
                    $campaign->item_category_id = $itemCategory->id;
                    $campaign->item_category_name = $itemCategoryName;
                    //dump($itemCategory);
                }else{
                    /*create new record to database item_categories*/
                    $newItemCategory = new ItemCategory();
                    $newItemCategory->name = $itemCategoryName;
                    $newItemCategory->is_enabled = false;
                    $newItemCategorySave = ItemCategory::create($newItemCategory->toArray());
                    if($newItemCategorySave){
                        $campaign->item_category_id = $newItemCategorySave->id;
                        $campaign->item_category_name = $itemCategoryName;

                    }
                    //dump($newItemCategorySave);
                }
            }
            if ($request['deliveryOption2']) { // drop-off
                $campaign->is_delivery = true;
                if (isset($request['delivery_note'])) {
                    $campaign->delivery_note = $request['delivery_note'];
                }
            }
            if ($request['deliveryOption1']) { // delivery
                $campaign->is_drop_off = true;
                if (isset($request['delivery_note'])) {
                    $campaign->delivery_note = $request['delivery_note'];
                }
            }

        } else {

        }
        $campaign->start_date = date('Y-m-d', strtotime($request['start_date']));
        $campaign->end_date = date('Y-m-d', strtotime($request['end_date']));
        if($request['raising_option'] == 'cash'){
            $campaign->raising_cash_amount_goal = $request['raising_or_donating_goal_amount'] * 100; //* 100 because we can display back by /100
        }else{
            $campaign->raising_item_quantity_goal = $request['raising_or_donating_goal_amount'];

        }

        //save contact
        $campaign->phone_number = $request['phone_number'];
        $campaign->email_address = $request['email_address'];
        $campaign->facebook = $request['facebook_link'];
        $campaign->telegram = $request['telegram_username'];

        // save image thumbnail
        if ($request->hasFile('thumbnail_image')) {
            if (!is_dir(public_path() . '/img/campaign_images')) ;
            {
                @mkdir(public_path() . '/img/campaign_images');
            }
            $targetPathImageThumbnail = public_path() . '/img/campaign_images';
            $targetBasePathImageThumbnail = 'img/campaign_images';
            $imagesOfThumbnail = $request->file('thumbnail_image');
            $extension = $imagesOfThumbnail->getClientOriginalExtension();
//                dump($image);
            $imageName = pathinfo($imagesOfThumbnail->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
            $imagesOfThumbnail->move($targetPathImageThumbnail, $imageName);
//            $campaign->image_thumbnail_path = $targetPathImageThumbnail.DIRECTORY_SEPARATOR.$imageName;
            $campaign->image_thumbnail_path = $targetBasePathImageThumbnail . DIRECTORY_SEPARATOR . $imageName;
        }
        // save QR code
        if ($request->hasFile('qr_code_image')) {
            $qrCodeBasePath = 'img/qrcode_payments';
            if (!is_dir(public_path() . '/img/qrcode_payments')) ;
            {
                @mkdir(public_path() . '/img/qrcode_payments');
            }
            $targetPathImageQrCode = public_path() . '/'. $qrCodeBasePath;
            $imagesOfQrCode = $request->file('qr_code_image');
            $extension = $imagesOfQrCode->getClientOriginalExtension();
            $imageName = pathinfo($imagesOfQrCode->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
            $imagesOfQrCode->move($targetPathImageQrCode, $imageName);
            $campaign->qr_code_payment_image_path = $qrCodeBasePath . DIRECTORY_SEPARATOR . $imageName;
        }
        // save ID card
        if ($request->hasFile('id_card_image')) {
            $idCardBasePath = 'img/user_idcard_images';
            if (!is_dir(public_path() . '/'.$idCardBasePath)) ;
            {
                @mkdir(public_path() . '/'.$idCardBasePath);
            }
            $targetPathIdCardImage = public_path() . '/'.$idCardBasePath;
            $imagesOfIdCard = $request->file('id_card_image');
            $extension = $imagesOfIdCard->getClientOriginalExtension();
            $imageName = pathinfo($imagesOfIdCard->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
            $imagesOfIdCard->move($targetPathIdCardImage, $imageName);
//            $campaign-> = $targetPathIdCardImage.DIRECTORY_SEPARATOR.$imageName;
            $user = Auth::user();

            $idCard = Image::create([
                'name' => ID_CARD,
                'path' => $idCardBasePath . DIRECTORY_SEPARATOR . $imageName
            ]);
            $user->id_card_image_id = $idCard->id;
            $user->save();
        }

        /*temp data for dev*/
        //TODO change this when user role is done
        $campaign->approved_by_sys_user_id = null;
        $campaign->status = 'pending';

        //save campaign to DB

        $campaignSave = Campaign::create($campaign->toArray());
        $isSuccess = true;
        if ($campaignSave) {
            //save associated subtitle and its photo
            $subTitleCountOrder = 1;
            if (isset($request['campaign_title']) && !empty($request['campaign_title'])) {
                $summaryIsSave = $this->createSubTitleWithItsImage($request, $campaignSave->id, 'title', $request['campaign_title'], $subTitleCountOrder, 'multiple_image_for_title');
                if (!$summaryIsSave) {
                    $isSuccess = false;
                }
                $subTitleCountOrder++;
            }
            if (isset($request['campaign_summary']) && !empty($request['campaign_summary'])) {
                $summaryIsSave = $this->createSubTitleWithItsImage($request, $campaignSave->id, 'summary', $request['campaign_summary'], $subTitleCountOrder, 'multiple_image_for_summary');
                if (!$summaryIsSave) {
                    $isSuccess = false;
                }
                $subTitleCountOrder++;
            }
            if (isset($request['campaign_purpose']) && !empty($request['campaign_purpose'])) {
//                $campaign->summary = $request['campaign_purpose'];
                $summaryIsSave = $this->createSubTitleWithItsImage($request, $campaignSave->id, 'purpose', $request['campaign_purpose'], $subTitleCountOrder,
                    'multiple_image_for_purpose');
                if (!$summaryIsSave) {
                    $isSuccess = false;
                }
                $subTitleCountOrder++;
            }
            if (isset($request['campaign_goal']) && !empty($request['campaign_goal'])) {
//                $campaign->summary = $request['campaign_goal'];
                $summaryIsSave = $this->createSubTitleWithItsImage($request, $campaignSave->id, 'goal', $request['campaign_goal'], $subTitleCountOrder, 'multiple_image_for_goal');
                if (!$summaryIsSave) {
                    $isSuccess = false;
                }
                $subTitleCountOrder++;
            }
            /*create subtitle addition record here*/
            if(isset($request['campaign_additional_title']) && !empty($request['campaign_additional_title'])){
                $campaignAdditionalSubtitles = $request['campaign_additional_title'];
                $campaignAdditionalSubtitleDescriptions = $request['campaign_additional_subtitle_description'];
                $subtitleAndDescriptions = [];
                foreach ($campaignAdditionalSubtitles as $i => $campaignAdditionalSubtitle){
                    if(!empty($campaignAdditionalSubtitle)){
                        $tmpSubtitleAndItsDescription = [
                            'name' => $campaignAdditionalSubtitle,
                            'description' => $campaignAdditionalSubtitleDescriptions[$i]
                        ];
                        if($request->hasFile('multiple_image_for_additional_subtitle-'.$i)){
                            $tmpSubtitleAndItsDescription['images'] = 'multiple_image_for_additional_subtitle-'.$i;
                        }
                        $subtitleAndDescriptions[] = $tmpSubtitleAndItsDescription;
                    }
                }
                //dump($subtitleAndDescriptions);
                foreach ($subtitleAndDescriptions as $subtitleAndDescription){
                    $isAdditionalSubTitleSaved = $this->createSubTitleWithItsImage($request, $campaignSave->id, $subtitleAndDescription['name'], $subtitleAndDescription['description'], $subTitleCountOrder, $subtitleAndDescription['images']);
                    //dump($isAdditionalSubTitleSaved);
                    if($isAdditionalSubTitleSaved){
                        $subTitleCountOrder++;
                        $isSuccess = true;
                    }else{
                        $isSuccess = false;
                        break;
                    }
                }
            }

            /*create additional contact record here*/
            if(isset($request['campaign_additional_contact_title']) && !empty($request['campaign_additional_contact_title'])){
                $campaignAdditionalContacts = $request['campaign_additional_contact_title'];
                $campaignAdditionalContactDetails = $request['campaign_additional_contact_title'];
                $additionalContactAndItsDetails = [];
                foreach ($campaignAdditionalContacts as $i => $campaignAdditionalContact){
                    if(!empty($campaignAdditionalContact)){
                        $tmpContactAndItsDetail = [
                            'campaign_id' => $campaignSave->id,
                            'name' => $campaignAdditionalContact,
                            'link_ref' => $campaignAdditionalContactDetails[$i]
                        ];
                        $additionalContactAndItsDetails[] = $tmpContactAndItsDetail;
                    }
                }
                CampaignAdditionalContact::insert($additionalContactAndItsDetails);
                //dump($additionalContactAndItsDetails);
            }

            /*create record of drop off location*/
            if($campaignSave->is_drop_off){
                if(isset($request['location_name']) && !empty($request['location_name'])){
                    $locationNamesDropOff = $request['location_name'];
                    $locationDescriptionsDropOff = $request['location_description'];
                    $locationLatitudes = $request['latitude'];
                    $locationLongitudes = $request['longitude'];
                    $locationDropOffData = [];
                    foreach ($locationNamesDropOff as $i => $locationNameDropOff){
                        $tmpLocations = [
                            'campaign_id' => $campaignSave->id,
                            'location_name' => $locationNameDropOff,
                            'location_description' => $locationDescriptionsDropOff[$i],
                            'location_latitude' => $locationLatitudes[$i] == null ? null: floatval($locationLatitudes[$i]),
                            'location_longitude' => $locationLongitudes[$i] == null ? null : floatval($locationLongitudes[$i])
                        ];
                        $locationDropOffData[] = $tmpLocations;
                    }
                    CampaignDropOffLocation::insert($locationDropOffData);
                }
            }

        } else {
            $isSuccess = false;
        }
        //dump($campaignSave->id);
//        dd($request->all());
        return response()->json(['success' => $isSuccess, 'message' => 'Data saved successfully','data'=>$campaign]);
    }

    protected function createSubTitleWithItsImage($request, $campaignSaveID, $subTitleName, $subTitleDetail, $subTitleOrder, $multipleImageInputName): bool
    {
        $campaignSubtitle = new CampaignSubtitle();
        $campaignSubtitle->name = $subTitleName;
        $campaignSubtitle->campaign_id = $campaignSaveID;
        $campaignSubtitle->description = $subTitleDetail;
        $campaignSubtitle->ordered = $subTitleOrder;
        $campaignSubTitleSave = CampaignSubtitle::create($campaignSubtitle->toArray());
        if ($campaignSubTitleSave) {
            // save its images
            //dump($request->hasFile($multipleImageInputName));
            if ($request->hasFile($multipleImageInputName)) {
                //dd(public_path().'/img/campaign_images');
                if (!is_dir(public_path() . '/img/campaign_images')) ;
                {
                    @mkdir(public_path() . '/img/campaign_images');
                }
                $targetPathImageCampaignSubTitle = public_path() . '/img/campaign_images';
                $imagesOfSubTitle = $request->file($multipleImageInputName);
                $imageTitleOrderCount = 1;
                foreach ($imagesOfSubTitle as $imageOfSubTitle) {
                    $extension = $imageOfSubTitle->getClientOriginalExtension();
                    $imageName = pathinfo($imageOfSubTitle->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
                    $imageOfSubTitle->move($targetPathImageCampaignSubTitle, $imageName);
                    /*save image to Images table first*/
                    $image = new Image();
                    $image->name = $subTitleName;
                    $imageBasePath = 'img/campaign_images';
                    $image->path = $imageBasePath . DIRECTORY_SEPARATOR . $imageName;
                    $imageSave = Image::create($image->toArray());
                    if ($imageSave) {
                        /*then save it to campaign image*/
                        $multipleImageForSubTitle = new CampaignImage();
                        $multipleImageForSubTitle->campaign_subtitle_id = $campaignSubTitleSave->id;
                        $multipleImageForSubTitle->image_id = $imageSave->id;
                        $multipleImageForSubTitle->image_path = $imageSave->path;
                        $multipleImageForSubTitle->ordered = $imageTitleOrderCount;
                        CampaignImage::create($multipleImageForSubTitle->toArray());
                        $imageTitleOrderCount++;
                    }
                }
            }
            return true;
        }
        return false;
    }

    /**
     * Display the specified resource.
     */
    public function show_user(string $user_id, string $campaign_id)
    {
        $campaign = Campaign::findOrFail($campaign_id);

        $user = User::findOrFail($campaign->user_id);

        return view('campaigns.show', [
            'campaign' => $campaign,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        dd($id);
        $campaign  = Campaign::find($id);
        if($campaign){
            $campaign->delete();
        }
        return back()->with('success','Delete success');
    }

    public function donateCash($campaignId){
        $campaign = Campaign::find($campaignId);
        $user = Auth::user();
//        dd($user);
        if(!$user){
            $user = new User();
            $user->id = null;
            $user->name = 'Uknown User';
        }
        return view('campaigns.cash_donation',compact('campaign','user'));
    }

    public function donateNowWithCash(Request $request){

        $tokenPayment = $request['payment_method'];
        $username = $request['name'];
        $donateAmount = floatval($request['donate_amount']);
        $commissionRate = $request['commission'];
        $paymentOption = $request['payment-option'];
        $userId = $request['user_id'];
        $campaignId = $request['campaign_id'];

        $campaignDonatedCash = new CampaignDonatedCash();
        $campaignDonatedCash->user_id = $userId;
        $campaignDonatedCash->campaign_id = $request['campaign_id'];
        $campaignDonatedCash->original_amount = $donateAmount * 100;
        $campaignDonatedCash->total_amount = ceil(($donateAmount * 100) * ((100 - $commissionRate)/100));
        $campaignDonatedCash->is_successful = false;
        $campaignDonatedCash->commission_rate = $commissionRate;
        $campaignDonatedCash->donation_date = date('Y-m-d');
        //dump($donateAmount);
        //dump($tokenPayment);
        //dd($request->all());
        //dd($paymentOption == 'stripe');
        if($paymentOption == 'stripe'){
            try {
                $description = $username.' has been donated to sharesquare campaign';
                $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
                $results = $stripe->paymentIntents->create([
                    'amount' => $donateAmount * 100,
                    'currency' => 'usd',
                    'payment_method' => $tokenPayment,
                    'description' => $description ,
                    'confirm' => true,
                ]);
//                dd($results);

                $campaign = Campaign::findOrFail($campaignId);
                //dd($campaign);
                $campaignDonatedCash->payment_method = 'stripe';
                if($results->status == 'succeeded'){
                    /*save it to database*/
                    // save payment ref id
                    // save ref n.o from stripe
                    $campaignDonatedCash->is_successful = true;

                    $saveCampaignDonatedCash = CampaignDonatedCash::create($campaignDonatedCash->toArray());
                    /*update data to campaigns table*/
                    $amountCollected = $campaign->raising_cash_amount_collected;
                    $campaign->raising_cash_amount_collected = $amountCollected + ($donateAmount * 100);
                    //dd($campaign->user);
                    if($campaign->user){
                        $userRaisingCashCollected = $campaign->user->total_cash_raising_amount;
                        $campaign->user->total_cash_raising_amount = $campaign->raising_cash_amount_collected + $userRaisingCashCollected;
                        $campaign->user->save();
                    }
                    $campaign->save();
                    $data = [
                        'donate_amount' => $donateAmount,
                    ];

                    return response()->json(['success' => true, 'message' => 'Payment success', 'data'=>$data]);
               }else{
                    $campaignDonatedCash->is_successful = false;
                    $campaign->save();
                    //TODO update method method and status to
                    return response()->json(['success' => false, 'message' => 'transaction action required']);
                }
            }catch (CardException $th) {
                throw new Exception("There was a problem processing your payment", 1);
            } catch (ApiErrorException $e) {
            }
        }
        return response()->json(['success' => false, 'message' => 'error something']);
    }

    public function userCareCampaign(Request $request){

        //dd($request->all());
//        dd($request['is_care']);
        // find record first
        //TODO handle on user id is null
        $userLoveCampaign = UserLoveCampaign::where('user_id','=',Auth::user()->id)->where('campaign_id','=',$request['campaign_id'])->first();
        //dd($userLoveCampaign);
        $campaign = Campaign::findOrFail($request['campaign_id']);

        if(empty($userLoveCampaign)){
            $userLoveCampaign = new UserLoveCampaign();
            $userLoveCampaign->campaign_id = $request['campaign_id'];
            $userLoveCampaign->user_id = Auth::user()->id;
            $userLoveCampaign->is_love = true;
            $userLoveCampaignSave = UserLoveCampaign::create($userLoveCampaign->toArray());
            if($userLoveCampaignSave){
                // update value to the campagin in love column
                $campaign->number_of_love += 1;
                $campaign->save();
            }
            return response()->json(['success'=>true,'message'=>'Hello']);
        }
        $userLoveCampaign->is_love = !($request['is_care'] == "false");
        $userLoveCampaign->save();

        if($userLoveCampaign->is_love){
            $campaign->number_of_love += 1;
        }else{
            $campaign->number_of_love -= 1;
        }
        $campaign->save();
        return response()->json(['success'=>true,'message'=>'modified']);
    }

    public function comment($campaign_id){
        $campaign = Campaign::findOrFail($campaign_id);

        $this->__increaseNumOfView($campaign_id);
        $user = User::findOrFail($campaign->user_id);
        $isLoveCampaign = null;
        if (Auth::user()){
            $isLoveCampaign = UserLoveCampaign::where('user_id', '=',Auth::user()->id)
                ->where('campaign_id','=',$campaign_id)
                ->first();
        }
        $comments = UserCommentCampaign::with('user')
            ->where('campaign_id' ,'=',$campaign_id)
            ->orderBy('created_at','desc')
            ->get();
//        dd($comments);
        $numberOfComment = $comments->count();
        //dd($numberOfComment);
        return view('campaigns.comment',[
            'number_of_comment' => $numberOfComment,
            'campaign' => $campaign,
            'user' => $user,
            'isLoveCampaign' => $isLoveCampaign,
            'comments' => $comments
        ]);
    }

    public function userComment(Request $request){

        //dd($request->all());
        $userCommentCampaign = new UserCommentCampaign();
        $userCommentCampaign->user_id = $request['user_id'] == null? null: $request['user_id'];
        $userCommentCampaign->campaign_id = $request['campaign_id'];
        $userCommentCampaign->comment = $request['commentText'];

        if ($request->hasFile('comment_image')) {
            if (!is_dir(public_path() . '/img/comment_image')) ;
            {
                @mkdir(public_path() . '/img/comment_image');
            }
            $targetPanhaImageComment = public_path() . '/img/campaign_images';
            $targetBasePathImageComment = 'img/campaign_images';
            $imagesOfComment = $request->file('comment_image');
            $extension = $imagesOfComment->getClientOriginalExtension();
//                dump($image);
            $imageName = pathinfo($imagesOfComment->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
            $imagesOfComment->move($targetPanhaImageComment, $imageName);
//            $campaign->image_thumbnail_path = $targetPathImageThumbnail.DIRECTORY_SEPARATOR.$imageName;
            $userCommentCampaign->image_path = $targetBasePathImageComment . DIRECTORY_SEPARATOR . $imageName;
        }
        $userCommentCampaignSave = UserCommentCampaign::create($userCommentCampaign->toArray());
        $campaign = Campaign::findOrFail($request['campaign_id']);
        $campaign->number_of_comment += 1;
        $campaign->save();
        return response()->json(['success'=>true,'data'=>$userCommentCampaignSave]);
    }
}

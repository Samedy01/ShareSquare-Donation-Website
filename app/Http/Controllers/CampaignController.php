<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignCategory;
use App\Models\CampaignImage;
use App\Models\CampaignSubtitle;
use App\Models\Image;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use function Psy\debug;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaigns.index', ['campaigns' => $campaigns]);
    }

    public function show($campaign_id) {
        $campaign = Campaign::findOrFail($campaign_id);

        $user = User::findOrFail($campaign->user_id);

        return view('campaigns.show', [
            'campaign' => $campaign,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $campaignCategories = CampaignCategory::all();
        return view('campaigns.create',compact('campaignCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd(isset($request['campaign_goal']) && !empty($request['campaign_goal']));
        $userId = Auth::user()->id;
        $campaign = new Campaign();
        //check the campaign if it is raise or donating
        $campaignType = $request['campaign_type'];

        $campaign->user_id = $userId;
        $campaign->title = isset($request['campaign_title']) ? $request['campaign_title'] : '';

        if(isset($request['campaign_summary'])){
            $campaign->summary = $request['campaign_summary'];
        }
        if(isset($request['campaign_purpose'])){
            $campaign->summary = $request['campaign_purpose'];
        }
        if(isset($request['campaign_goal'])){
            $campaign->summary = $request['campaign_goal'];
        }
        $campaign->campaign_category_id = $request['campaign_category'];
        $campaign->is_raising = false;
        if($campaignType == 'raising'){
            $campaign->is_raising = true;
            if($request['raising_option'] == 'cash'){
                $campaign->is_cash = true;
                $campaign->is_item = false;

                $campaign->payment_option = $request['payment_option'];
                $campaign->payment_account_number = $request['payment_account_number'];

            }else{
                $campaign->is_cash = false;
                $campaign->is_item = true;
            }

        }else{

        }
        $campaign->start_date = date('Y-m-d', strtotime($request['start_date']));
        $campaign->end_date = date('Y-m-d', strtotime($request['end_date']));
        $campaign->raising_cash_amount_goal = $request['raising_or_donating_goal_amount'];
        $campaign->phone_number = $request['phone_number'];
        $campaign->email_address = $request['email_address'];
        $campaign->facebook = $request['facebook_link'];
        $campaign->telegram = $request['telegram_username'];

        // save image thumbnail
        if($request->hasFile('thumbnail_image')){
            if(!is_dir(public_path().'/img/campaign_images'));{
                @mkdir(public_path().'/img/campaign_images');
            }
            $targetPathImageThumbnail =  public_path().'/img/campaign_images';
            $imagesOfThumbnail = $request->file('thumbnail_image');
            $extension = $imagesOfThumbnail->getClientOriginalExtension();
//                dump($image);
            $imageName = pathinfo($imagesOfThumbnail->getClientOriginalName(),PATHINFO_FILENAME).'_'.time().'.'.$extension;
            $imagesOfThumbnail->move($targetPathImageThumbnail, $imageName);
            $campaign->image_thumbnail_path = $targetPathImageThumbnail.DIRECTORY_SEPARATOR.$imageName;
        }
        // save QR code
        if($request->hasFile('qr_code_image')){
            if(!is_dir(public_path().'/img/qrcode_payments'));{
                @mkdir(public_path().'/img/qrcode_payments');
            }
            $targetPathImageQrCode =  public_path().'/img/qrcode_payments';
            $imagesOfQrCode = $request->file('qr_code_image');
            $extension = $imagesOfQrCode->getClientOriginalExtension();
            $imageName = pathinfo($imagesOfQrCode->getClientOriginalName(),PATHINFO_FILENAME).'_'.time().'.'.$extension;
            $imagesOfQrCode->move($targetPathImageQrCode, $imageName);
            $campaign->qr_code_payment_image_path = $targetPathImageQrCode.DIRECTORY_SEPARATOR.$imageName;
        }
        // save ID card
        if($request->hasFile('id_card_image')){
            if(!is_dir(public_path().'/img/user_idcard_images'));{
                @mkdir(public_path().'/img/user_idcard_images');
            }
            $targetPathIdCardImage =  public_path().'/img/user_idcard_images';
            $imagesOfIdCard = $request->file('id_card_image');
            $extension = $imagesOfIdCard->getClientOriginalExtension();
            $imageName = pathinfo($imagesOfIdCard->getClientOriginalName(),PATHINFO_FILENAME).'_'.time().'.'.$extension;
            $imagesOfIdCard->move($targetPathIdCardImage, $imageName);
//            $campaign-> = $targetPathIdCardImage.DIRECTORY_SEPARATOR.$imageName;
            $user = Auth::user();

            $idCard = Image::create([
                'name'=> ID_CARD,
                'path' => $targetPathIdCardImage.DIRECTORY_SEPARATOR.$imageName
            ]);
            $user->id_card_image_id = $idCard->id;
            $user->save();
        }

        /*temp data for dev*/
        $campaign->approved_by_sys_user_id = 2;
        $campaign->status = 'success';

        //save campaign to DB

        $campaignSave = Campaign::create($campaign->toArray());
        $isSuccess = true;
        if($campaignSave){
            //save associated subtitle and its photo
            $subTitleCountOrder = 1;
            if(isset($request['campaign_title']) && !empty($request['campaign_title'])){
                $summaryIsSave = $this->createSubTitleWithItsImage($request, $campaignSave->id, 'title', $request['campaign_title'], $subTitleCountOrder, 'multiple_image_for_title');
                if(!$summaryIsSave){
                    $isSuccess = false;
                }
                $subTitleCountOrder++;
            }
            if(isset($request['campaign_summary']) && !empty($request['campaign_summary'])){
                $summaryIsSave = $this->createSubTitleWithItsImage($request, $campaignSave->id, 'summary', $request['campaign_summary'], $subTitleCountOrder, 'multiple_image_for_summary');
                if(!$summaryIsSave){
                    $isSuccess = false;
                }
                $subTitleCountOrder++;
            }
            if(isset($request['campaign_purpose']) && !empty($request['campaign_purpose'])){
//                $campaign->summary = $request['campaign_purpose'];
                $summaryIsSave = $this->createSubTitleWithItsImage($request, $campaignSave->id, 'purpose', $request['campaign_purpose'], $subTitleCountOrder,
                    'multiple_image_for_purpose');
                if(!$summaryIsSave){
                    $isSuccess = false;
                }
                $subTitleCountOrder++;
            }
            if(isset($request['campaign_goal']) && !empty($request['campaign_goal'])){
//                $campaign->summary = $request['campaign_goal'];
                $summaryIsSave = $this->createSubTitleWithItsImage($request, $campaignSave->id, 'goal', $request['campaign_goal'], $subTitleCountOrder, 'multiple_image_for_goal');
                if(!$summaryIsSave){
                    $isSuccess = false;
                }
                $subTitleCountOrder++;
            }
        }else{
            $isSuccess = false;
        }
//        dump($campaign);
//        dd($request->all());
        return response()->json(['success' => $isSuccess, 'message' => 'Data saved successfully']);
    }

    protected function createSubTitleWithItsImage($request, $campaignSaveID, $subTitleName, $subTitleDetail, $subTitleOrder, $multipleImageInputName):bool
    {
        $campaignSubtitle = new CampaignSubtitle();
        $campaignSubtitle->name = $subTitleName;
        $campaignSubtitle->campaign_id = $campaignSaveID;
        $campaignSubtitle->description = $subTitleDetail;
        $campaignSubtitle->ordered = $subTitleOrder;
        $campaignSubTitleSave = CampaignSubtitle::create($campaignSubtitle->toArray());
        if($campaignSubTitleSave) {
            // save its images
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
                    $image->path = $targetPathImageCampaignSubTitle.DIRECTORY_SEPARATOR.$imageName;
                    $imageSave = Image::create($image->toArray());
                    if($imageSave){
                        /*then save it to campaign image*/
                        $multipleImageForSubTitle = new CampaignImage();
                        $multipleImageForSubTitle->campaign_subtitle_id = $campaignSaveID;
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
        //
    }
}

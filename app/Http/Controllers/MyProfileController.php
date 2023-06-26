<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignDonatedCash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{


    public function overview(){
        $user = Auth::user();
        $numberOfCampaign = Campaign::where('user_id','=',$user->id)
            ->where('status','=','success')
            ->count();
        $totalRaising = Campaign::where('user_id','=',$user->id)
            ->where('status','=','success')
            ->sum('raising_cash_amount_collected');
        //dd($numberOfCampaign);
        return view('profile.overview',compact('user','numberOfCampaign','totalRaising'));
    }

    public function myCampaign($user_id){
        $campaigns = Campaign::with('campaignCategory')
            ->where('user_id', $user_id)
//            ->where('status','=','success')
            ->orderBy('created_at','desc')
            ->get();

        return view('profile.mycampaign', compact('campaigns'));
    }

    public function history(){

        $totalCashDonation = CampaignDonatedCash::where('user_id','=',Auth::user()->id)
            ->where('is_successful','=',1)
            ->sum('original_amount');
        //dd($totalCashDonation);
        //TODO fetch record of donating item
        $cashDonations = CampaignDonatedCash::with('user','campaign','campaign.campaignCategory')->where('user_id','=',Auth::user()->id)
            ->where('is_successful','=',1)
            //->whereNotNull('campaign.campaign_category_id')
            ->get();
        //dd($cashDonations);
        return view('profile.history',compact(
            'totalCashDonation', 'cashDonations'
        ));
    }

    public function following(){
        return view('profile.following');
    }

    public function follower(){
        return view('profile.follower');
    }

    public function editprofile(){
        return view('profile.editprofile');
    }


    // My Campaign
    public function allCampaign(){

        return view('profile.mycampaign.allcampaign');
    }

    public function closedCampaign(){
        return view('profile.mycampaign.closedcampaign');
    }

    public function reachedgoal(){
        return view('profile.mycampaign.reachedgoal');
    }

    public function unreachedgoal(){
        return view('profile.mycampaign.unreachedgoal');
    }

    public function draft(){
        return view('profile.mycampaign.draft');
    }

}

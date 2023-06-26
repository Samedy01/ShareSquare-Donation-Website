<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{


    public function overview(){
        return view('profile.overview');
    }

    public function myCampaign($user_id){
        $my_campaigns = Campaign::where('user_id', $user_id)->get();

        return view('profile.mycampaign', ['my_campaigns' => $my_campaigns]);
    }

    public function history(){
        return view('profile.history');
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

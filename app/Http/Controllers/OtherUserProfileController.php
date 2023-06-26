<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OtherUserProfileController extends Controller{

    // overview
    public function overview($id){

        $user = User::find($id);

        return view('otheruserprofile.overview', ['user' => $user]);
    }

    public function campaign(){
        return view('otheruserprofile.campaign');
    }

    public function history(){
        return view('otheruserprofile.history');
    }

    public function following(){
        return view('otheruserprofile.following');
    }

    public function follower(){
        return view('otheruserprofile.follower');
    }

    // User Campaign
    public function allCampaign(){
        return view('otheruserprofile.usercampaign.allcampaign');
    }

    public function closedCampaign(){
        return view('otheruserprofile.usercampaign.closedcampaign');
    }

    public function reachedgoal(){
        return view('otheruserprofile.usercampaign.reachedgoal');
    }

    public function unreachedgoal(){
        return view('otheruserprofile.usercampaign.unreachedgoal');
    }

    public function draft(){
        return view('otheruserprofile.usercampaign.draft');
    }

}

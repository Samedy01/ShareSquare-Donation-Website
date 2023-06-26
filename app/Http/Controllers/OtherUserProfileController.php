<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserFollowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtherUserProfileController extends Controller{

    // overview
    public function overview($id){

        $user = User::find($id);
        $isUserFollow = false;
        $userFollow = UserFollowing::where('user_source_id','=',Auth::user()->id)
            ->where('user_target_id','=',$id)->first();
        if ($userFollow){
            if($userFollow->is_following){
                 $isUserFollow = true;
            }
        }
//        dd($userFollow);
        return view('otheruserprofile.overview', ['user' => $user,'lockFollow'=>$isUserFollow]);
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

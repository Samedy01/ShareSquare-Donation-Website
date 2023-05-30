<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{


    public function overview(){
        return view('profile.overview');
    }

    public function myCampaign(){
        return view('profile.mycampaign');
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
}

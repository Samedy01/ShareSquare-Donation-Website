<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function viewOtherProfile($user_id){
        dd($user_id);
        return view('profile.other_profile');
    }

}

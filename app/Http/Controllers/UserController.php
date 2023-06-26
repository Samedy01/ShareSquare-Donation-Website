<?php

namespace App\Http\Controllers;

use App\Models\UserFollowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewOtherProfile($user_id){
        //dd($user_id);
        return view('profile.other_profile');
    }

    public function userFollowToOtherUser(Request $request){
        //dd($request);
        $userSourceId = Auth::user()->id;
        $userTargetId = $request['user_target_id'];
        // find in db first
        $userFollowing = UserFollowing::where('user_source_id','=',$userSourceId)
        ->where('user_target_id','=',$userTargetId)->first();
        //dd($request['is_follow']);
        if(!$userFollowing){
            $userFollowing = new UserFollowing();
            $userFollowing->is_following = !($request['is_follow'] == "0");
            $userFollowing->user_source_id = $userSourceId;
            $userFollowing->user_target_id = $userTargetId;
            UserFollowing::create($userFollowing->toArray());
            return response()->json(['success'=>true,'message'=>'hello']);
        }
        $userFollowing->is_following = !($request['is_follow'] == "0");
        $userFollowing->save();
        return response()->json(['success'=>true,'message'=>'hello']);

    }

}

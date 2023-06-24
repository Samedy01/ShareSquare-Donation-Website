<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function searchUsersAndCampaigns(Request $request) {

        $searchKey = $request->input('keyword');

        /*search campaign*/
        $campaigns = Campaign::select(['id', 'title','image_thumbnail_path'])
                    ->where('title','LIKE','%'.$searchKey.'%')->get();
//        dd($campaigns);
        $users = User::select(['id','name','image_profile_path'])->where('name','LIKE','%'.$searchKey.'%')->get();
        $results = null;
        foreach ($campaigns as $campaign){
            $results[] = [
                'type' => 'campaign',
                'id' => $campaign->id,
                'title' => $campaign->title,
                'image_path' => $campaign->image_thumbnail_path
            ];
        }
        foreach ($users as $user){
            $results[] = [
                'type'=>'user',
                'id'=> $user->id,
                'name'=>$user->name,
                'image_path' => $user->image_profile_path
            ];
        }

        return response()->json(['result' => $results]);
    }
}

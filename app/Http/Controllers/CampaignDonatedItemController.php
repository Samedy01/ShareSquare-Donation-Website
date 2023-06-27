<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignDonatedItem;
use App\Models\ItemCategory;
use App\Models\User;
use Illuminate\Http\Request;

class CampaignDonatedItemController extends Controller
{
    public function donateItem($campaignId){
        $campaign = Campaign::with('user','dropOffLocation','itemCategory')->findOrFail($campaignId);
        return view('Item_Donation.item_donation',compact('campaign'));
    }
    public function performDonatedItem(Request $request){
        // dd($request->all());
        $campaigndonateditem = new CampaignDonatedItem();
        $campaigndonateditem->user_id = $request['user_id'];
        $campaigndonateditem->campaign_id = $request['campaign_id'];

        $campaigndonateditem->is_donating_by_delivery = true;
        $campaigndonateditem->item_name = $request['item_name'];
        $campaigndonateditem->quantity = $request['quantity_items'];
        $campaigndonateditem->phone_number = $request['phone_number'];
        $campaigndonateditem->email = $request['email'];
        $campaigndonateditem->facebook = $request['facebook'];
        $campaigndonateditem->telegram = $request['telegram'];
        $campaigndonateditem->reachable_date = $request['date'];
        $campaigndonateditem->reachable_time = $request['time'];
        $campaigndonateditem->delivery_note = $request['note'];
        $campaigndonateditem->status = 'success';
        $campaigndonateditem->donation_date = date('Y-m-d');


        /*update to campaign*/
        $campaign = Campaign::findOrFail($request['campaign_id']);
        $collectedQuantity = $campaign->raising_item_quantity_collected;
        $campaign->raising_item_quantity_collected = $collectedQuantity + $request['quantity_items'];
        $isSave = $campaign->save();
        //dd($campaign->id);
        /*create new item if there is no item category is match*/
        $itemCategory = ItemCategory::where('name','=',$request['item_name'])->firstOrFail();
        //dd($itemCategory);
        if (!$itemCategory){
            ItemCategory::create([
                'name'=> $request['item_name']
            ]);
        }else{
            $campaigndonateditem->item_category_id = $itemCategory->id;
        }
        $userDonated = User::findOrFail($request['user_id']);
        $campaignDonatedItemSaved = CampaignDonatedItem::create($campaigndonateditem->toArray());
        return view('Item_Donation.done_donated',[
            'quantity' => $request['quantity_items'],
            'campaignDonatedItem' => $campaignDonatedItemSaved,
            'donor'=>$userDonated,
            'campaign'=>$campaign
        ]);

    }
}

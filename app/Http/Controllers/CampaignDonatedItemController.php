<?php

namespace App\Http\Controllers;

use App\Models\CampaignDonatedItem;
use Illuminate\Http\Request;

class CampaignDonatedItemController extends Controller
{
    public function itemDonation(){
        return view('Item_Donation.item_donation');
    }
    public function performDonatedItem(Request $request){
        // dd($request->all());
        $campaigndonateditem = new CampaignDonatedItem();
        $campaigndonateditem->user_id = $request['user_id'];
        $campaigndonateditem->campaign_id = $request['campaign_id'];
        $campaigndonateditem->item_category_id = 1;
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
        CampaignDonatedItem::create($campaigndonateditem->toArray());
        return view('Item_Donation.done_donated');

    }
}

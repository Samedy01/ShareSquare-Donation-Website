<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignDonatedCash;
use App\Models\User;
use Illuminate\Http\Request;

class CampaignDonatedCashController extends Controller
{
    //
    public function index($campaign_id) {
        error_log('campaign_id: '.$campaign_id);
        $campCashs = CampaignDonatedCash::where('campaign_id', $campaign_id)->get();
        $donors = [];

        $campCashs_donors = [];

        error_log('n_campCash: '.count($campCashs));

        foreach ($campCashs as $item) {
            error_log('donor_id: '. $item->user_id);
            $donor = User::findOrFail($item->user_id);
            
            array_push($campCashs_donors, ['campCash' => $item, 'donor' => $donor]);

            array_push($donors, $donor);
        }

        $campaign = Campaign::findOrFail($campaign_id);

        error_log('donors: '.count($donors));
        if (count($donors) > 0) {
            error_log('donor1: '.$donors[0]);
        }


        $user = User::findOrFail($campaign->user_id); // user of the campaign

        return view('campaigns.donators', [
            'campaign' => $campaign,
            'user' => $user,
            'donors' => $donors,
            'campaignDonatedCashs' => $campCashs,
            'campCashDonors' => $campCashs_donors,


        ]);
    }
}

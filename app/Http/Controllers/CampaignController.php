<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignCategory;
use App\Models\User;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaigns.index', ['campaigns' => $campaigns]);
    }

    public function show($campaign_id) {
        $campaign = Campaign::findOrFail($campaign_id);

        $user = User::findOrFail($campaign->user_id);

        return view('campaigns.show', [
            'campaign' => $campaign,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $campaignCategories = CampaignCategory::all();
        return view('campaigns.create',compact('campaignCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->file());
    }

    /**
     * Display the specified resource.
     */
    public function show_user(string $user_id, string $campaign_id)
    {
        $campaign = Campaign::findOrFail($campaign_id);

        $user = User::findOrFail($campaign->user_id);

        return view('campaigns.show', [
            'campaign' => $campaign,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

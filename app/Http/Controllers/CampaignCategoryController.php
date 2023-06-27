<?php

namespace App\Http\Controllers;

use App\Models\CampaignCategory;
use App\Models\ItemCategory;
use Illuminate\Http\Request;

class CampaignCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaignCategories = CampaignCategory::all();
        return view('campaign_categories.index',compact('campaignCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('campaign_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'is_enabled' => 'required|boolean',
        ]);
        CampaignCategory::create($request->all());

        return redirect()->route('campaign_categories.index')->with('success', 'Campaign category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CampaignCategory $campaignCategory)
    {
        return view('campaign_categories.edit', compact('campaignCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CampaignCategory $campaignCategory)
    {
        $request->validate([
            'name' => 'required|max:20',
            'is_enabled' => 'required|boolean',
        ]);

        $campaignCategory->update($request->all());

        return redirect()->route('campaign_categories.index')->with('success', 'Campaign category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CampaignCategory $campaignCategory)
    {
        $campaignCategory->delete();

        return redirect()->route('campaign_categories.index')->with('success', 'Campaign category deleted successfully.');
    }
}

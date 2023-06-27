<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignCategory;
use App\Models\CampaignSubtitle;
use App\Models\Image;
use App\Models\ItemCategory;
use App\Models\User;
use Auth;

use ErrorException;
use Illuminate\Http\Request;
use Mockery\Exception;
use function Psy\debug;

class AdminController extends Controller
{
    public function campaigns(Request $request)
    {
        // Get the sort column and order from the request
        $sortColumn = $request->input('sort_column', 'id');
        $sortOrder = $request->input('sort_order', 'asc');
        $filterStatus = $request->input('filter_status');
        $raisingType = $request->input('raising_type');
        $campaignCategoryId = $request->input('campaign_category_id');
        //dump($raisingType);
        //if change campaign category id
        if (!empty($campaignCategoryId) && $campaignCategoryId != 'all') {
            $query = Campaign::with('campaignCategory', 'itemCategory')
                ->orderBy($sortColumn, $sortOrder)
                ->whereNotNull('user_id')
                ->where('campaign_category_id', '=', $campaignCategoryId)
                ->whereNull('deleted_at');
            $cloneQuery = clone $query;
            if (!empty($raisingType) && $raisingType != 'all') {
                $isCash = $raisingType == 'cash';
                //dump($isCash);
                $query = Campaign::with('campaignCategory', 'itemCategory')
                    ->orderBy($sortColumn, $sortOrder)
                    ->whereNotNull('user_id')
                    ->where('is_cash', '=', $isCash)
                    ->where('campaign_category_id', '=', $campaignCategoryId)
                    ->whereNull('deleted_at');
                //dd($campaigns);
                $cloneQuery = clone $query;
                if (!empty($filterStatus) && $filterStatus != 'all') {
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->where('is_cash', '=', $isCash)
                        ->where('status', '=', $filterStatus)
                        ->where('campaign_category_id', '=', $campaignCategoryId)
                        ->whereNull('deleted_at');
                } elseif ($filterStatus == 'all') {
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->where('is_cash', '=', $isCash)
                        ->where('campaign_category_id', '=', $campaignCategoryId)
                        ->whereNull('deleted_at');
                }
            } elseif ($raisingType == 'all') {
                $query = Campaign::with('campaignCategory', 'itemCategory')
                    ->orderBy($sortColumn, $sortOrder)
                    ->whereNotNull('user_id')
                    ->where('campaign_category_id', '=', $campaignCategoryId)
                    ->whereNull('deleted_at');
                $cloneQuery = clone $query;
                if (!empty($filterStatus) && $filterStatus != 'all') {
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->where('status', '=', $filterStatus)
                        ->where('campaign_category_id', '=', $campaignCategoryId)
                        ->whereNull('deleted_at');
                } elseif ($filterStatus == 'all') {
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->where('campaign_category_id', '=', $campaignCategoryId)
                        ->whereNull('deleted_at');
                }
            }
        } else {
            $query = Campaign::with('campaignCategory', 'itemCategory')
                ->orderBy($sortColumn, $sortOrder)
                ->whereNotNull('user_id')
                ->whereNull('deleted_at');
            $cloneQuery = clone $query;
            if (!empty($raisingType) && $raisingType != 'all') {
                $isCash = $raisingType == 'cash';
                //dump($isCash);
                $query = Campaign::with('campaignCategory', 'itemCategory')
                    ->orderBy($sortColumn, $sortOrder)
                    ->whereNotNull('user_id')
                    ->where('is_cash', '=', $isCash)
                    ->whereNull('deleted_at');
                //dd($campaigns);
                $cloneQuery = clone $query;
                if (!empty($filterStatus) && $filterStatus != 'all') {
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->where('is_cash', '=', $isCash)
                        ->where('status', '=', $filterStatus)
                        ->whereNull('deleted_at');

                } elseif ($filterStatus == 'all') {
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->where('is_cash', '=', $isCash)
                        ->whereNull('deleted_at');
                }
            } elseif ($raisingType == 'all') {

                $query = Campaign::with('campaignCategory', 'itemCategory')
                    ->orderBy($sortColumn, $sortOrder)
                    ->whereNotNull('user_id')
                    ->whereNull('deleted_at');
                //dd($campaigns);
                $cloneQuery = clone $query;
                if (!empty($filterStatus) && $filterStatus != 'all') {
                    //dd('hello');
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->where('status', '=', $filterStatus)
                        ->whereNull('deleted_at');
                } elseif ($filterStatus == 'all') {
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->whereNull('deleted_at');
                }
                //dd('hello');
            } else {
                if (!empty($filterStatus) && $filterStatus != 'all') {
//                    dd('hello');
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->where('status', '=', $filterStatus)
                        ->whereNull('deleted_at');
                } elseif ($filterStatus == 'all') {
                    $query = Campaign::with('campaignCategory', 'itemCategory')
                        ->orderBy($sortColumn, $sortOrder)
                        ->whereNotNull('user_id')
                        ->whereNull('deleted_at');
                }
            }
        }

        $campaigns = $query->paginate(10);
        $campaignsForCount = $cloneQuery->get();
        //dump($campaigns);
        //dd($campaignsForCount);
        try {
            $userId = Auth::user()->id;
        } catch (ErrorException $exception) {
            $userId = 2;
        }
//        dd($campaigns);
        $campaignCategories = CampaignCategory::all();
        //dd($campaignsForCount);
        //count the number of each status
        $numOfPending = 0;
        $numOfSuccess = 0;
        $numOfReject = 0;
        $totalCampaign = 0;
        foreach ($campaignsForCount as $campaign) {
            $campaignStatus = $campaign->status;
            if ($campaignStatus == 'pending') {
                $numOfPending++;
            } elseif ($campaignStatus == 'success') {
                $numOfSuccess++;
            } elseif ($campaignStatus == 'reject') {
                $numOfReject++;
            }
            $totalCampaign++;
        }
//        dd($campaignCategory);
        return view('admin.campaigns', compact('userId', 'campaigns', 'sortOrder', 'sortColumn', 'filterStatus', 'campaignCategories', 'raisingType', 'campaignCategoryId'
            , 'numOfReject', 'numOfSuccess', 'numOfPending', 'totalCampaign'));
    }

    public function viewCampaign($campaignId)
    {
        $campaign = Campaign::with('campaignCategory', 'additionalContact', 'itemCategory', 'dropOffLocation')
            ->where('id', '=', $campaignId)
            ->firstOrFail();
        // dd($campaign);
        $campaignSubtitles = CampaignSubtitle::with('campaignImage')->where('campaign_id', '=', $campaignId)->get();
    //    dd($campaignSubtitles);
        $user = User::where('id', '=', $campaign->user_id)->firstOrFail();
        $idCardImagePath = Image::where('id', '=', $user->id_card_image_id)
            ->orderBy('created_at', 'desc')
            ->firstOrFail();
        // dd($idCardImagePath);
        return view('admin.view_campaign', compact('campaign', 'campaignSubtitles', 'idCardImagePath', 'user'));
    }

    public function approveCampaign(Request $request)
    {
        //$data = $request->all();
        //debug($data);
        $campaign = Campaign::where('id', '=', $request['campaign_id'])->firstOrFail();
        //dd($campaign);
        //$campaign = new Campaign();
        $campaign->approved_by_sys_user_id = $request['admin_id'];
        $campaign->status = 'success';
        $campaign->save();

        return response()->json(['success' => true]);
    }

    public function rejectCampaign(Request $request)
    {
        $data = $request->all();
        $campaign = Campaign::where('id', '=', $data['campaign_id'])->firstOrFail();
        $campaign->approved_by_sys_user_id = $data['admin_id'];
        $campaign->status = 'reject';
        $campaign->rejected_reason = $data['reason'];
        $campaign->save();
        return response()->json(['success' => true, 'reason' => $data['reason']]);
    }

    public function campaignDelete(Request $request)
    {
        //dd($request);
        $campaign = Campaign::findOrFail($request['campaign_id']);
        $campaign->delete();
        return redirect()->route('admin.campaigns')->with('success', 'Campaign deleted successfully.');
    }

    public function campaignCategories()
    {
        $campaignCategories = CampaignCategory::all();
        //dd($campaignCategories);
        return view('admin.index_campaign_category', compact('campaignCategories'));
    }

    public function campaignCategoryCreate()
    {
        return view('admin.campaign_category_create');
    }

    public function storeCampaignCategory(Request $request)
    {
        CampaignCategory::create($request->all());
        return redirect()->route('admin.campaignCategories')->with('success', 'Campaign category created successfully.');
    }

    public function editCampaignCategory($campaignCategoryId)
    {
        $campaignCategory = CampaignCategory::findOrFail($campaignCategoryId);
        return view('admin.campaign_category_edit',compact('campaignCategory'));
    }
    public function updateCampaignCategory(Request $request, $campaignCategoryId)
    {
        $campaignCategory = CampaignCategory::findOrFail($campaignCategoryId);
        $campaignCategory->is_enabled = $request['is_enabled'];
        $campaignCategory->name = $request['name'];
        $campaignCategory->save();

        return redirect()->route('admin.campaignCategories')->with('success', 'Campaign category updated successfully.');
    }
    public function deleteCampaignCategory(Request $request, $campaignCategoryId)
    {
        $campaignCategory = CampaignCategory::findOrFail($campaignCategoryId);
        $campaignCategory->delete();
        return redirect()->route('admin.campaignCategories')->with('success', 'Campaign category deleted successfully.');
    }

    public function campaignItemCategories(){
        $itemCategories = ItemCategory::all();
        return view('admin.item_categories.index',compact('itemCategories'));
    }
    public function createItemCategory(){
        return view('admin.item_categories.create');
    }

}

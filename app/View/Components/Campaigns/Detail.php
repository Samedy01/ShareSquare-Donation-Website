<?php

namespace App\View\Components\Campaigns;

use App\Models\CampaignDonatedCash;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Campaign;
use App\Models\User;

class Detail extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Campaign $campaign,
        public User $user,
        //public CampaignDonatedCash $topDonors,
        public int $currenttabindex = 0,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.campaigns.detail');
    }
}

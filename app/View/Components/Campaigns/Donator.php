<?php

namespace App\View\Components\Campaigns;

use App\Models\CampaignDonatedCash;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Donator extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        // public User $donor,
        public $campcashdonor,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.campaigns.donator');
    }
}

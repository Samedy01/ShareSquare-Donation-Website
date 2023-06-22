<?php

namespace App\View\Components\Campaigns;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tab extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $currentindex = 0,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.campaigns.tab');
    }
}

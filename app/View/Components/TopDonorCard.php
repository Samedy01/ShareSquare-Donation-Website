<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopDonorCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name = 'no name',
        public string $date = 'no date',
        public string $amount = 'no amount',
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.top-donor-card');
    }
}

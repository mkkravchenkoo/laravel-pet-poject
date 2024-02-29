<?php

namespace App\View\Components;

use App\Models\Config;
use App\Models\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BookingForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $configFields = ['booking-text'];
        $config = Config::whereIn('name', $configFields)->get()->getAssoc();

        $servicesOptions = Service::select('title')->get();


        return view('components.booking-form', [
            'bookingText' => $config['booking-text'],
            'options' => $servicesOptions,
            'title' => 'Certified and Award Winning Car Repair Service Provider'
        ]);
    }
}

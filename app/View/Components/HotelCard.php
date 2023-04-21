<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HotelCard extends Component
{
    public $price;

    public $tax;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public $hotel
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // generate a random price
        $this->price = number_format($this->hotel['price'], 2);

        // get 10% from the price and set it as tax
        $this->tax = $this->hotel['price'] * 0.1;

        return view('components.hotel-card');
    }
}

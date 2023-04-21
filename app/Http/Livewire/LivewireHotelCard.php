<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LivewireHotelCard extends Component
{

    public $hotel;

    public $price;

    public $rooms;

    public $tax;

    public function mount($hotel)
    {
        $this->hotel = $hotel;

        // generate a random price
        $this->price = number_format($hotel['price'], 2);

        $this->tax = 0;
    }

    public function calculateTax(){
        // get 10% from the price and set it as tax
        $this->tax = $this->hotel['price'] * 0.1;
    }

    public function bookNow()
    {
        // save the booking to the database
    }

    public function render()
    {
        return view('livewire.livewire-hotel-card');
    }
}

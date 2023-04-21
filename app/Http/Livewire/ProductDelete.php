<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductDelete extends Component
{

    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product-delete');
    }

    public function delete()
    {
        $this
            ->product
            ->delete();

        // redirec the user to the list page
        return redirect()->route('admin.product-livewire.index');
    }
}

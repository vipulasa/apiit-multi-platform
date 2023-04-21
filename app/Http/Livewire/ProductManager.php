<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\WithFileUploads;

use Livewire\Component;

class ProductManager extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $product;

    public $view = 'index';

    public $photo;

    protected $rules = [
        'product.title' => 'required|string|max:255',
        'product.description' => 'required|string',
        'product.price' => 'required',
        'photo' => 'nullable',
        'product.status' => 'nullable'
    ];

    public function mount()
    {
        $this->product = new \App\Models\Product();
    }

    public function create()
    {
        $this->view = 'form';
    }

    public function edit($id)
    {
        $this->product = \App\Models\Product::find($id);

        $this->view = 'form';
    }

    public function delete($id)
    {
        $product = \App\Models\Product::find($id);

        $product->delete();
    }

    public function save()
    {
        $this->validate();

        if ($this->photo) {

            $this->product->image = $this->photo->storePublicly('products', 'public');
        }

        $this->product->save();

        $this->view = 'index';

        session()->flash('message', 'The Product updated.');
    }

    public function render()
    {
        return view('livewire.product-manager', [
            'products' => \App\Models\Product::orderBy('id', 'DESC')->paginate(10),
            'product' => $this->product
        ])
            ->layout('layouts.admin-layout');
    }
}

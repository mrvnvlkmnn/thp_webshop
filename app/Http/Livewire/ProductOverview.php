<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductOverview extends Component
{
    public $itemID;
    public $product;

    public function mount($itemID)
    {
        $this->itemID = $itemID;
    }

    public function getProduct()
    {

        $this->product = Product::where('slug', 'LIKE', $this->itemID)->get();
        $this->product = $this->product[0];
    }

    public function render()
    {
        $this->getProduct();
        return view('livewire.product-overview');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class ShopIndex extends Component
{
    public $product_name;
    public $list_price;
    public $category_name;
    public $quantity;

    public function addProduct(Request $request)
    {
        #dd($this->category_name, $this->list_price, $this->product_name, $this->quantity);
        $category = Categories::create([
           'category_name' => $this->category_name,
        ]);

        $category->product()->create([
            'product_name' => $this->product_name,
            'list_price' => $this->list_price,
            'quantity' => $this->quantity,
        ]);
    }

    public function render()
    {
        return view('livewire.shop-index');
    }
}

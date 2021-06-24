<?php

namespace App\Http\Livewire;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class ShopIndex extends Component
{
    public $product_name;
    public $list_price;
    public $category_name;
    public $quantity;

    public $products;

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
            'slug' => Str::slug($this->product_name),
        ]);
    }

    protected function getAllProducts(){
        $this->products = Product::with('categories')->get();

        foreach($this->products as $product){
            $product->categories_id = Categories::where('id','LIKE',$product->categories_id)->get();
            #dd($product->categories_id[0]->category_name);
        }

        return $this->products;
    }

    public function render()
    {
        $this->getAllProducts();
        return view('livewire.shop-index');
    }
}

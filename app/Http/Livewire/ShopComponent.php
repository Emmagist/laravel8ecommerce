<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    //paginating products to shopComponent
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-component', ['products'=>$products])->layout('layouts.base');
    }
}

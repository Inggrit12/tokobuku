<?php

namespace App\Http\Livewire;

use App\Facades\Carts;
use Livewire\Component;
use App\Models\Buku as Products;

class Product extends Component
{
    public function render()
    {
        return view('livewire.product', [
            'products'=>Products::all(),
        ]);
    }

    public function addToCart(int $productId){
        Carts::add(Products::where('id', $productId)->first());
        $this->emit('productAdded');
    }

    
}

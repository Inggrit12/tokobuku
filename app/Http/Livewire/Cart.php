<?php

namespace App\Http\Livewire;

use App\Facades\Carts;
use Livewire\Component;
use App\Models\Buku as Products;

class Cart extends Component
{

    protected $listeners =[
        'productAdded' => 'mount'
    ];

    public $cart;

    public function mount(){
        $this->cart=Carts::get();
        
    }

    public function render()
    {
        return view('livewire.cart');
    }
    
    

    public function removeItem($productId){
        Carts::remove($productId);
        $this->cart=Carts::get();
        $this->emit('productRemoved');
    }

    public function checkout()
    {
        Carts::clear();
        $this->cart=Carts::get();
    }

}

<?php

namespace App\Facades;

use illuminate\Support\Facades\Facade;

class Carts extends Facade{
    public static function getFacadeAccessor(){
        return 'cart';
    }
}
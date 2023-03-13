<?php

use App\Models\user\cartFood;

function cartItems()
{
    $cart = cartFood::get();
    return $cart->count();
}

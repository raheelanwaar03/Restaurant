<?php

use App\Models\user\cartFood;

function cartItems()
{
    $cart = cartFood::get();
    return $cart->count();
}

function totalCartQty()
{
    $totalQty = cartFood::where('user_id',auth()->user()->id)->sum('qty');
    return $totalQty;
}


function orderTotalPrice()
{
    $cartProductPrice = cartFood::where('user_id', auth()->user()->id)->sum('total_price');

    return $cartProductPrice;
}

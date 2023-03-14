<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Food;
use App\Models\user\cartFood;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function addToCart(Request $request, $id)
    {
        $food = Food::find($id);

        // check if food already added to cart

        $foodCheck = cartFood::where('id',auth()->id())->where('product_id',$food->id)->first();
        if($foodCheck)
        {
            return redirect()->back()->with('error','You already added this product to cart');
        }

        // storing food details

        $cartFood = new cartFood();
        $cartFood->user_id = auth()->id();
        $cartFood->product_id = $food->id;
        $cartFood->title = $food->title;
        $cartFood->qty = $request->qty;
        $cartFood->image = $food->image;
        $cartFood->price = $food->price;
        // calculating price
        $price = $food->price * $request->qty;
        $cartFood->total_price = $price;
        $cartFood->save();
        return  redirect()->back()->with('success','Food added to cart successfully');

    }

    public function allCartItems()
    {
        $categorys = Category::get();
        $foods = cartFood::paginate(9);
        return view('landingpage.cart.index',compact('foods','categorys'));
    }

    public function updateCart(Request $request,$id)
    {
        $cartFood = cartFood::find($id);

        $cartFood->qty = $request->qty;

        $price = $cartFood->price * $request->qty;

        $cartFood->total_price = $price;
        $cartFood->save();

        return redirect()->back()->with('success','Food quantity updated successfully');
    }

    public function deleteCart($id)
    {
        $cartFood = cartFood::find($id);
        $cartFood->delete();
        return redirect()->back()->with('success','Item removed form your cart');
    }

}

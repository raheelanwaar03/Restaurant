<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Food;
use App\Models\Order;
use App\Models\user\cartFood;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    // cart items

    public function addToCart(Request $request, $id)
    {
        $extera = $request->extera;
        $count =  count($extera);
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
        $cartFood->total_price = $price + $count;
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

    // order system

    public function storeOrder($id)
    {
        // check user address

        $userAddress = UserAddress::where('user_id',auth()->user()->id)->first();
        if($userAddres = '')
        {
            return redirect()->route('Add.Address')->with('error','Please Add Your Address For Receiving Delivery');
        }

        $cartFood = cartFood::find($id);

        // storing cartItem into order

        $orderFood = new Order();
        $orderFood->user_id = auth()->id();
        $orderFood->product_id = $cartFood->product_id;
        $orderFood->title = $cartFood->title;
        $orderFood->item_price = $cartFood->price;
        $orderFood->total_price = $cartFood->total_price;
        $orderFood->image = $cartFood->image;
        $orderFood->item_qty = $cartFood->qty;
        $orderFood->save();
        // removing from cart
        $cartFood->delete();

        return redirect()->back()->with('success','Thanks for Your Order!');

    }

    public function allOrder()
    {
        $categorys = Category::get();
        $orderFoods = Order::paginate(10);
        return view('landingpage.order.index',compact('orderFoods','categorys'));

    }

    public function destroyOrder($id)
    {
        $orderFood = Order::find($id);
        $orderFood->status = 'Cancelled';
        $orderFood->save();
        return redirect()->back()->with('success','Your order is cancelled');

    }

}

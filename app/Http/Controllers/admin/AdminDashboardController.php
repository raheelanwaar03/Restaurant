<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\TableBook;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function bookTable()
    {
        $tables = TableBook::paginate(9);
        return view('admin.dashboard.table',compact('tables'));
    }

    public function allOrders()
    {
        $orderFood = Order::where('status','pending')->with('userOrders')->get();
        return view('admin.order.index',compact('orderFood'));
    }

    public function cancelOrder($id)
    {
        $orderFood = Order::find($id);
        $orderFood->status = 'Admin Cancelled';
        $orderFood->save();
        return redirect()->back()->with('success','Order Cancelled successfully');
    }

    public function deliverOrder($id)
    {
        $orderFood = Order::find($id);
        $orderFood->status = 'Delivered';
        $orderFood->save();
        return redirect()->back()->with('success','Order Delivered successfully');
    }

    public function cancelledOrder()
    {
        $orderFood = Order::where('status','Admin Cancelled')->get();
        return view('admin.order.cancel',compact('orderFood'));
    }

    public function deliveredOrders()
    {
        $orderFood = Order::where('status','Delivered')->get();
        return view('admin.order.deliveredOrders',compact('orderFood'));
    }

}

<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Food;
use App\Models\TableBook;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $categorys = Category::get();
        $foods = Food::get();
        return view('landingpage.index',compact('categorys','foods'));
    }

    public function showAddress()
    {
        $categorys = Category::get();
        $foods = Food::get();
        $address = UserAddress::where('user_id',auth()->user()->id)->latest();
        return view('landingpage.showAddress',compact('address','categorys','foods'));
    }

    public function updateAddress(Request $request)
    {

    }


    public function aboutUs()
    {
        $categorys = Category::get();
        return view('landingpage.aboutUs',compact('categorys'));
    }

    public function contactUs()
    {
        $categorys = Category::get();
        return view('landingpage.contactUs',compact('categorys'));
    }

    public function findTable()
    {
        $categorys = Category::get();
        return view('landingpage.tableBook',compact('categorys'));
    }

    public function welcomeCategories()
    {
        $foods = Food::get();
        $categorys = Category::paginate(9);
        return view('landingpage.category.index',compact('categorys','foods'));
    }
    // showing category wise product

    public function singleCategory($slug)
    {
        if(Category::where('slug',$slug)->exists())
        {
            $category = Category::where('slug',$slug)->first();
            $foods = Food::where('category_id',$category->id)->paginate(9);
            $categorys = Category::get();
            return view('landingpage.category.product',compact('foods','category','categorys'));
        }
        else{
            return redirect('/')->with('error','slug is not avaliable');
        }
    }

    // store table

    public function reserveTable(Request $request)
    {
        $validated = $request->validate([
            'time' => 'required',
            'person' => 'required',
            'calendar' => 'required',
            'massage' => 'required',
        ]);

        $table = new TableBook();
        $table->user_id = auth()->user()->id;
        $table->person = $validated['person'];
        $table->time = $validated['time'];
        $table->calendar = $validated['calendar'];
        $table->massage = $validated['massage'];
        $table->save();
        return redirect()->back()->with('success','Your request for table reservation has been recived');
    }

    public function allProducts()
    {
        $categorys = Category::paginate(9);
        $foods = Food::paginate(9);
        return view('landingpage.products.index',compact('foods','categorys'));
    }

    public function showProduct($slug)
    {
        $categorys = Category::paginate(9);
        $food = Food::where('slug',$slug)->first();
        return view('landingpage.products.show',compact('food','categorys'));
    }

    public function address()
    {
        $categorys = Category::paginate(9);
        return view('landingpage.address',compact('categorys'));
    }

    public function storeAddress(Request $request)
    {
        $validated = $request->validate([
            'address'=>'required',
        ]);

        $userAddress = new UserAddress();
        $userAddress->user_id = auth()->user()->id;
        $userAddress->address = $validated['address'];
        $userAddress->save();
        return redirect()->back()->with('success','Your Address added successfully');

    }

}

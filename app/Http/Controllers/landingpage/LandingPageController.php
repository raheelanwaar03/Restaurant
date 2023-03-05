<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Food;

class LandingPageController extends Controller
{
    public function index()
    {
        $categorys = Category::get();
        return view('landingpage.index',compact('categorys'));
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
        $categorys = Category::paginate(9);
        return view('LandingPage.category.index',compact('categorys'));
    }
    // showing category wise product

    public function singleCategory($slug)
    {
        if(Category::where('slug',$slug)->exists())
        {
            $category = Category::where('slug',$slug)->first();
            $products = Food::where('category_id',$category->id)->paginate(9);
            $categorys = Category::get();
            return view('landingpage.category.product',compact('products','category','categorys'));
        }
        else{
            return redirect('/')->with('error','slug is not avaliable');
        }
    }

}

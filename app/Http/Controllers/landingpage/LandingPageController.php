<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;

class LandingPageController extends Controller
{
    public function index()
    {
        $categorys = Category::get();
        return view('landingpage.index',compact('categorys'));
    }

    public function aboutUs()
    {
        return view('landingpage.aboutUs');
    }

    public function contactUs()
    {
        return view('landingpage.contactUs');
    }

    public function findTable()
    {
        return view('landingpage.tableBook');
    }

    public function welcomeCategories()
    {
        $categories = Category::get();
        return view('LandingPage.category.index',compact('categories'));
    }

}

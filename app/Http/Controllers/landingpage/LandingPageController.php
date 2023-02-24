<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingpage.index');
    }

    public function aboutUs()
    {
        return view('landingpage.aboutUs');
    }

    public function contactUs()
    {
        return view('landingpage.contactUs');
    }

}

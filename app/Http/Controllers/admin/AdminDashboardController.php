<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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

}

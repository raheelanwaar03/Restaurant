<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FoodContoller extends Controller
{
    public function add()
    {
        $categorys = Category::get();
        return view('admin.food.add', compact('categorys'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'des' => 'required',
            'price' => 'required',
            'slug' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);
        $image = $validated['image'];
        $imagename = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imagename);

        $food = new Food();
        $food->title = $validated['title'];
        $food->des = $validated['des'];
        $food->price = $validated['price'];
        $food->slug = Str::slug($validated['slug']);
        $food->category = $validated['category'];
        $food->image = $imagename;
        $food->save();
        return redirect()->back()->with('success', 'Food added successfully');
    }

    public function index()
    {
        $foods = Food::get();
        return view('admin.food.index', compact('foods'));
    }

    public function show($slug)
    {
        $food = Food::where('slug', $slug)->first();
        return view('admin.food.show', compact('food'));
    }

    public function destroy($id)
    {
        $food = Food::find($id);
        $food->destroy($id);
        return redirect()->back()->with('success', 'Food Deleted Successfully');
        return $id;
    }

    public function edit($slug)
    {
        $categorys = Category::get();
        $food = Food::where('slug', $slug)->first();
        return view('admin.food.edit', compact('food', 'categorys'));
    }

    public function update(Request $request,$slug)
    {
        $food = Food::where('slug',$slug)->first();

        if ($request->image) {
            $image = $request->image;
            $imageName = rand(111111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $food->image = $imageName;
        }

        $food->title = $request->title;
        $food->des = $request->des;
        $food->price = $request->price;
        $food->category = $request->category;
        $food->save();
        return redirect()->back()->with('success', 'Food Details updated successfully');
    }
}

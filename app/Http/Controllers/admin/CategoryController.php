<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function add()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'des' => 'required',
            'slug' => 'required',
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $category = new Category();
        $category->title = $validated['title'];
        $category->des = $validated['des'];
        $category->slug = Str::slug($validated['slug']);
        $category->image = $imageName;
        $category->save();
        return redirect()->back()->with('success', 'Category added successfully');
    }

    public function index()
    {
        $categorys = Category::get();
        return view('admin.category.index', compact('categorys'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.category.show', compact('category'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->destroy($id);
        return redirect()->back()->with('success', 'Category Deleted successfully');
    }

    public function Edit($slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();

        if ($request->image) {
            $image = $request->image;
            $imageName = rand(111111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $category->image = $imageName;
        }

        $category->title = $request->title;
        $category->des = $request->des;
        $category->slug = Str::slug($request->slug);
        $category->des = $request->des;
        $category->save();
        return redirect()->back()->with('success', 'Category updated successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;
use App\Models\Category;
use Str;
class CategoryController extends Controller
{
    public function list()
    {
    	$categories = Category::orderBy('id', 'DESC')->get();
    	return view('admin.categories.list', compact('categories')); 
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'category' => 'required|string|unique:categories'
        ]);
        
        if($request->file('image')){
            $image = $request->file('image')->store('category_pics');
        }else{
            $image = null;
        }

    	Category::create([
                        'category' => $request->category,
                        'image' => $image,
                        'slug' => Str::slug($request->category)
    				]);
    	return redirect('admin/category-list')->with('success', 'Category added successfully.');
    }

    public function view($slug)
    {
    	$category = Category::where('slug', $slug)->first();
    	return view('admin.categories.view', compact('category'));
    }

    public function edit($slug)
    {
    	$category = Category::where('slug', $slug)->first();
    	return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request)
    {
    	$request->validate([
    		'category' => 'required|string|unique:categories,category,' .$request->id
        ]);
        
        $image = $request->image;
        if ($request->file('image')) {
            $image = $request->file('image')->store('category_pics'); 
        }

    	Category::where('id', $request->id)->update([ 'category' => $request->category, 'image' => $image ]);
    	return back()->with('success', 'Category updated successfully.');
    }

    public function destroy(Request $request)
    {
    	Category::where('id', $request->id)->delete();
    	$request->session()->flash('success', 'Category deleted successfully.');
    }
}

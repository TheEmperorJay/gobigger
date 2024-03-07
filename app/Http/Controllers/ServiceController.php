<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{   
    public function serviceCategoryList()
    {
    	$categories = ServiceCategory::orderBy('id', 'DESC')->get();
    	return view('admin.categories.list', compact('categories')); 
    }

    public function serviceCategoryCreate()
    {
    	return view('admin.categories.create');
    }

    public function serviceCategorSstore(Request $request)
    {
    	$request->validate([
    		'category' => 'required|string|unique:categories'
        ]);
        
        if($request->file('image')){
            $image = $request->file('image')->store('category_pics');
        }else{
            $image = null;
        }

    	ServiceCategory::create([
                        'title' => $request->title,
                        'image' => $image,
                        'slug' => Str::slug($request->category)
    				]);
    	return redirect('admin/category-list')->with('success', 'Category added successfully.');
    }

    public function serviceCategoryView($slug)
    {
    	$category = ServiceCategory::where('slug', $slug)->first();
    	return view('admin.categories.view', compact('category'));
    }

    public function serviceCategoryEdit($slug)
    {
    	$category = ServiceCategory::where('slug', $slug)->first();
    	return view('admin.categories.edit', compact('category'));
    }

    public function serviceCategoryUpdate(Request $request)
    {
    	$request->validate([
    		'category' => 'required|string|unique:categories,category,' .$request->id
        ]);
        
        $image = $request->image;
        if ($request->file('image')) {
            $image = $request->file('image')->store('category_pics'); 
        }

    	ServiceCategory::where('id', $request->id)->update(['title' => $request->title, 'image' => $image ]);
    	return back()->with('success', 'Category updated successfully.');
    }

    public function serviceCategoryDestroy(Request $request)
    {
    	ServiceCategory::where('id', $request->id)->delete();
    	$request->session()->flash('success', 'Category deleted successfully.');
    }


    public function list()
    {
        $pages = Service::orderBy('id', 'DESC')->get();
        return view('admin.services.list', compact('pages'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {   
        // dd($request);
        $request->validate([
            'title' => 'required',
            'content' => 'required', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:512', 
        ]);

        if($request->file('image')){
            $image = $request->file('image')->store('/');
        }else{
            $image = null;
        }

        Service::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
        ]);
        return redirect('admin/service-list')->with('success', 'Service added successfully.');
    }

    public function view($slug)
    {
        $page = Service::where('slug', $slug)->first();
        return view('admin.services.view', compact('page'));
    }

    public function edit($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request)
    {   
        $request->validate([
            'title' => 'required',
            'content' => 'required', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:512', 
        ]);
       
        if($request->file('image')){
            $image = $request->file('image')->store('/');
        }else{
            $image =  Service::where('id', $request->id)->first()->image;
        }
        Service::where('id', $request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect('admin/service-list')->with('success', 'Service updated successfully.');
    }

    public function destroy(Request $request)
    {
        Service::where('id', $request->id)->delete();
        $request->session()->flash('success', 'Service deleted successfully.');
    }

}

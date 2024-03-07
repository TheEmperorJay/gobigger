<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function list()
    {
    	$testimonials = Testimonial::orderBy('id', 'DESC')->get();
    	return view('admin.testimonials.list', compact('testimonials')); 
    }

    public function create()
    {
    	return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {   
        // dd($request->all());
    	$request->validate([
            'name'=>'required|string',
            'designation'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        
        if($request->file('image')){
            $image = $request->file('image')->store('testimonial_pics');
        }else{
            $image = null;
        }

     Testimonial::create([
                        'name' => $request->name,
                        'designation' => $request->designation,
                        'image' => $image,
    				]);
    	return redirect('admin/testimonial-list')->with('success', 'Testimonial added successfully.');
    }

    public function view($slug)
    {
    	$testimonial = Testimonial::where('slug', $slug)->first();
    	return view('admin.testimonials.view', compact('testimonial'));
    }

    public function edit($slug)
    {
    	$testimonial = Testimonial::where('slug', $slug)->first();
    	return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request)
    {
    	$request->validate([
            'name'=>'required|string',
            'designation'=>'required|string',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
         
        $t = Testimonial::where('id', $request->id)->first();
        $image = $request->image;
        if ($request->file('image')) {
            $image = $request->file('image')->store('testimonial_pics'); 
        }else{
            $image =  $t->image;
        }

     Testimonial::where('id', $request->id)->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $image,
           ]);
    	return back()->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Request $request)
    {
     Testimonial::where('id', $request->id)->delete();
    	$request->session()->flash('success', 'Category deleted successfully.');
    }
}

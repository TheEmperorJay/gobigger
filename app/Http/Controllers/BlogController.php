<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;

class BlogController extends Controller
{
    public function list()
    {
    	$blogs = Blog::orderBy('id', 'DESC')->get();
    	return view('admin.blogs.list', compact('blogs')); 
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::pluck('tag')->toArray();
        return view('admin.blogs.create',compact('categories','tags'));
    }

    public function store(Request $request)
    {   
        // dd($request->all());
        $this->validate($request,[
            'title'=>'required|string',
            'category_id'=>'required',
            'auther_name'=>'required|string',
            'meta_description'=>'nullable|string',
            'meta_keywords'=>'nullable|string',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'description' => 'required|string',
            'tags'=>'required'
        ],[
            'category_id.required'=>"category is required"
        ]);
        
        if($request->file('photo')){
            $photo = $request->file('photo')->store('blog_pics');
        }else{
            $photo = null;
        }

        $blog = new Blog();
        $blog->title =$request->title;
        $blog->description =$request->description;
        $blog->category_id =$request->category_id;
        $blog->photo = $photo;
        $blog->auther_name = $request->auther_name;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
  

        if($blog->save() && $request->tags){
            foreach ($request->tags as $key => $value) {
                $tag = new Tag();
                $tag->blog_id=$blog->id;
                $tag->tag=$value;
                $tag->save();
            }
        }
    	return redirect('admin/blog-list')->with('success', 'Blog added successfully.');
    }

    public function view($slug)
    {
    	$blog = Blog::where('slug', $slug)->first();
    	return view('admin.blogs.view', compact('blog'));
    }

    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $tags = Tag::where('blog_id','!=',$blog->id)->pluck('tag')->toArray();
        $blogTags = Tag::where('blog_id',$blog->id)->pluck('tag')->toArray();        
        $categories = Category::all();   
    	return view('admin.blogs.edit', compact('blog','tags','blogTags','categories'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'category_id'=>'required',
            'auther_name'=>'required|string',
            'meta_description'=>'nullable|string',
            'meta_keywords'=>'nullable|string',
            'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:1024|nullable',
            'description' => 'required|string',
            'tags'=>'required'
        ],[
            'category_id.required'=>"category is required"
        ]);
        
        $blog = Blog::find($request->blog_id);
        if($request->file('photo')){
            $photo = $request->file('photo')->store('blog_pics');
        }else{
            $photo = $blog->photo;
        }

       
        $blog->title =$request->title;
        $blog->description =$request->description;
        $blog->category_id =$request->category_id;
        $blog->photo = $photo;
        $blog->auther_name = $request->auther_name;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        
  
        if($blog->save() && $request->tags){
            $blogTags = Tag::where('blog_id',$blog->id)->pluck('id')->toArray();
            foreach ($request->tags as $key => $value) {
                $tag = new Tag();
                $tag->blog_id=$blog->id;
                $tag->tag=$value;
                $tag->save();
            }
        }
    	return back()->with('success', 'Blog updated successfully.');
    }

    public function destroy(Request $request)
    {
    	Blog::where('id', $request->id)->delete();
    	$request->session()->flash('success', 'Blog deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\ContactUs;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Notifications\ContactUs as NotificationsContactUs;
use Aws\Result;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;

class FrontendController extends Controller
{  
   public function index()
   {
      $services = Service::all();
      $testimonials = Testimonial::orderBy('id','desc')->get();
      return view('frontend.index',compact('services','testimonials'));
   }
    public function blogs(Request $request)
    {    
      
      if(!empty($request->all())){
        
         $query = Blog::leftJoin('tags','blogs.id','tags.blog_id')
         ->leftJoin('categories','blogs.category_id','categories.id')
         ->groupBy('blogs.id')->select('blogs.*');
         if($request->keyword){          
            $query->where('title','like','%'.$request->keyword.'%');
         }
         if($request->tag){          
            $query->where('tags.slug',$request->tag);
         }
         if($request->category){          
            $query->where('categories.slug',$request->category);
         }

         $blogs = $query->orderBy('blogs.id','desc')->paginate(9);
      }else{
         $blogs = Blog::orderBy('id','desc')->paginate(9);
      }
       $categories = Category::all(); 
       $tags = Tag::distinct('tag')->get();
       $popularBlogs = Blog::orderBy('id','desc')->take(3)->get();
      //  dd($tags);
       return view('frontend.blog',compact('blogs','categories','tags','popularBlogs'));
    }

    public function blogDetail($slug)
    { 
       $blog = Blog::where('slug',$slug)->first();
      //  dd($blog);
       Blog::where('id',$blog->id)->update(['read_count'=>$blog->read_count + 1]);
       $blogTags = Tag::where('blog_id',$blog->id)->get();
       $categories = Category::all(); 
       $tags = Tag::distinct('tag')->get();
       $popularBlogs = Blog::orderBy('id','desc')->take(3)->get();
       return view('frontend.blog-detail',compact('blog','blogTags','categories','tags','popularBlogs'));
    }

    public function storeComment(Request $request)
    {
    //    dd($request->all());
       $formData = request()->except(['_token','submit-form']);
       Comment::create($formData);

       return back()->with('success','comment is added successfully');
    }

    public function testimonials()
    {
       $testimonials = Testimonial::orderBy('id','desc')->paginate(9);
       return view('frontend.pages.testimonial',compact('testimonials'));
    }

    public function storeContactUs(Request $request)
    {
      //  dd($request->all());
       $request->validate([
          'first_name'=>'required|string',
          'last_name'=>'required|string',
          'email'=>'required|email|string',
         //  'phone'=>'required|digits:10',
          'subject'=>'required|string',
          'comments'=>'required|string',
       ]);

       $formData = request()->except(['_token']);
      //  dd($formData);
       $contact = ContactUs::create($formData);
       if($contact){
          
      //   $usernot= Notification::route('mail', 'info.gobigger@gmail.com')->notify(new NotificationsContactUs($contact));
      //   dd($usernot);
      $data= ['status'=>  'Congratulation','message'=>'Email is send successfully'];
         return response()->json($data);
       }
       return back()->with('error','Sorry error occuer while sending mail');
    }

    public function service($slug)
    { 
      $services = Service::all();
      $service = Service::where('slug',$slug)->first();
      $testimonials = Testimonial::inRandomOrder()->get()->take(3);
      return view('frontend.service-detail',compact('testimonials','service','services'));

    }

    public function testinomial()
    {
       $testinomials = Testimonial::orderBy('id','desc')->get();
       return view()->with('testinomials',$testinomials);
    }
    
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.pages.index');
// });
Route::prefix('admin')->group(function() {
	Route::get('/login', function () {return view('admin.login');});
	Route::post('/admin-login', [AdminController::class,'Login']);
	Route::get('/logout', [AdminController::class,'Logout']);
	Route::get('/forget-password', function () { return view('admin.forget-password');});
	Route::post('/forgetPassword',[AdminController::class,'ForgetPassword']);
	Route::get('/password/reset/{token}', function ($token) {
		return view('admin.set-new-password', compact('token', $token));
	});
	Route::post('set-new-password','Admin\AdminController@SetNewPassword');

	Route::middleware('admin')->group(function() {
		Route::get('/',[AdminController::class, 'dashboard']);
		Route::get('change-password', function () { return view('admin.change-password');});
        Route::post('changePassword',[AdminController::class,'ChangePassword']);
        Route::get('profile', function () { return view('admin.profile');});
        Route::post('update-profile', [AdminController::class,'UpdateProfile']);
		Route::get('notifications',[AdminController::class,'Notifications']);

		##Category
        Route::get('category-list',[CategoryController::class,'list']);
        Route::get('add-category',[CategoryController::class,'create'] );
        Route::post('store-category',[CategoryController::class,'store']);
        Route::get('view-category/{slug}',[CategoryController::class,'view'] );
        Route::get('edit-category/{slug}',[CategoryController::class,'edit'] );
        Route::post('update-category',[CategoryController::class,'update'] );
		Route::get('destroy-category',[CategoryController::class,'destroy']);

		##Service
        Route::get('service-list',[ServiceController::class,'list']);
        Route::get('add-service',[ServiceController::class,'create'] );
        Route::post('store-service',[ServiceController::class,'store']);
        Route::get('view-service/{slug}',[ServiceController::class,'view'] );
        Route::get('edit-service/{slug}',[ServiceController::class,'edit'] );
        Route::post('update-service',[ServiceController::class,'update'] );
		Route::get('destroy-service',[ServiceController::class,'destroy']);

		##Blog
        Route::get('blog-list',[BlogController::class,'list']);
        Route::get('add-blog',[BlogController::class,'create'] );
        Route::post('store-blog',[BlogController::class,'store']);
        Route::get('view-blog/{slug}',[BlogController::class,'view'] );
        Route::get('edit-blog/{slug}',[BlogController::class,'edit'] );
        Route::post('update-blog',[BlogController::class,'update'] );
		Route::get('destroy-blog',[BlogController::class,'destroy']);

		##Testinomial
        Route::get('testimonial-list',[TestimonialController::class,'list']);
        Route::get('add-testimonial',[TestimonialController::class,'create'] );
        Route::post('store-testimonial',[TestimonialController::class,'store']);
        Route::get('view-testimonial/{slug}',[TestimonialController::class,'view'] );
        Route::get('edit-testimonial/{slug}',[TestimonialController::class,'edit'] );
        Route::post('update-testimonial',[TestimonialController::class,'update'] );
		Route::get('destroy-testimonial',[TestimonialController::class,'destroy']);

		 ##ContactUs
		 Route::get('customer-queries', [AdminController::class,'queryList']);
		 Route::get('view-query/{slug}',[AdminController::class,'queryView'] );
		 Route::get('destroy-query', [AdminController::class,'queryDestroy']);
		
		 ##CMS
		 Route::get('page-list', 'Admin\CMSController@pageList');
		 Route::get('add-page', 'Admin\CMSController@pageCreate');
		 Route::post('store-page', 'Admin\CMSController@pageStore');
		 Route::get('view-page/{slug}', 'Admin\CMSController@pageView');
		 Route::get('edit-page/{id}', 'Admin\CMSController@pageEdit');
		 Route::post('update-page', 'Admin\CMSController@pageUpdate');
		 Route::get('destroy-page', 'Admin\CMSController@pageDestroy');
    });
});   

##Frontend Routes
Route::get('blogs',[FrontendController::class,'blogs']);
Route::get('/',[FrontendController::class,'index']);
Route::get('blog/{slug}',[FrontendController::class,'blogDetail']);
Route::post('store-comment',[FrontendController::class,'storeComment'] );
Route::post('post-service-enquiry',[FrontendController::class,'serviceEnquiry'] );
Route::get('testimonials',[FrontendController::class,'testimonials']);
Route::get('/contact-us', function () {  return view('frontend.contact');});
Route::get('/about-us', function () {  return view('frontend.about');});
Route::post('store-contact-us',[FrontendController::class,'storeContactUs'] );
Route::get('/service/{slug}', [FrontendController::class,'service']);



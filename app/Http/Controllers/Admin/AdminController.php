<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs as ModelsContactUs;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use App\Notifications\ContactUs;

class AdminController extends Controller
{
    public function Login(Request $request)
    {
    	$request->validate([
            'email' => 'required|email',
            'password' => ['required', 'min:8']
        ]);
        
        // dd($request->all());
        $remember_me = $request->has('remember_me') ? true : false;

	    if ($user = User::where('email', $request->email)->first()) {
            if (Hash::check($request->password, $user->password)) {                
                if (Auth::loginUsingId($user->id, $remember_me)) {
                    return redirect('admin')->with('success','Login successful.');
                }else{
                    return back()->with('error','Entered credentials do not match with our records.');
                } 
            }
            else{
                return back()->with('error','Entered credentials do not match with our records.');
            }
        }
        else{
            return back()->with('error','Entered email do not match with our records.');
        }
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login')->with('success','You have successfully logged out of your account.');
    }

    public function ChangePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
            'current_password' => ['required', 'string']
        ]);
        if(Hash::check($request->current_password, Auth::user()->password)){
            User::where('id', Auth::user()->id)->update(['password' => Hash::make($request->password)]);
            Auth::user()->notify(new ChangePassword());
            return back()->with('success', 'Your password changed successfully.');
        }
        else{
            return back()->with('error','Current password do not match with our records.');
        }
    }

    public function ForgetPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        if($user = User::where('email', $request->email)->where('role_id',1)->first()){
            $token = Str::random(60);
            if(User::where('email', $request->email)->update(['remember_token' => $token])){
                $user->notify(new ForgetPassword($token, $user));
                return back()->with('success', 'Reset email sent successfully, plese check your email.');
            }
        }else{
           return back()->with('error', 'This email dose not exist.');
        }
    }
  
    public function SetNewPassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
            'resetToken' => ['required', 'string'],
        ]);

        if($user = User::where('remember_token', $request->resetToken)->first()){
            if (User::where('remember_token', $request->resetToken)->update(['password' => Hash::make($request->password)])) {
                $user->notify(new ChangePassword());
                return redirect('admin')->with('success', 'Your password has been changed successfully.');
            }
        }else{
            return back()->with('error', "token expired.");
        }

    }

    public function UpdateProfile(Request $request)
    {
    	User::where('id', Auth::user()->id)->update([
    													'name' => $request->name,
    													'email' => $request->email,
    													'phone_number' => $request->phone_number
    												]);
    	return back()->with('success', 'Your profile updated successfully.');

    }

    public function Notifications(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $notifications = [];

        foreach ($user->notifications as $notification) {
            $notifications[] = $notification;
        }
        $user->unreadNotifications()->update(['read_at' => now()]);

        return view('admin.notifications', compact('notifications'));
    }

    public function dashboard()
    {
        // dd("working");    
        return view('admin.dashboard');
    }

    public function queryList()
    {
        $queries = ModelsContactUs::orderBy('created_at','desc')->get();
        // dd($queries);
    	return view('admin.contact-us.list', compact('queries'));
    }

    public function queryView($id)
    {
    	$query = ModelsContactUs::where('id', id)->first();
    	return view('admin.contact-us.view', compact('query'));
    }

    public function queryDestroy(Request $request)
    {
    	ModelsContactUs::where('id', $request->id)->delete();
    	$request->session()->flash('success', 'Query deleted successfully.');
    }
}

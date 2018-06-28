<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
class AdminController extends Controller
{
    public function index(){
    	if(Session::exists('admin')){
			return redirect('/');
		}
    	return view('layouts.admin.login');
    }
    public function login(Request $request){
    	$admin = Admin::where('email',$request->email)->first();
    	if(!is_null($admin)){
    		if (Hash::check($request->password, $admin->password)) {
    			$session = str_random(30);
    			$request->session()->put('admin', $session);
    			return redirect('/');
    		}
    		return back();
    	}
    	return back();
    }
    public function signup(){
    	return view('layouts.admin.signup');
    }
    public function doSignup(Request $request){
    	
    }
    public function logout(Request $request){
    	$request->session()->forget('admin');
    	return redirect('admin/login');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;   
use validator;
use Hash;

class AdminController extends Controller
{
    public function dashboard(){
        
        return view('admin.dashboard');
    }

    
    public function login(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30'
            ];

            $customeMessage = [
                'email.required' => 'Email Must be Needed',
                'email.email' => 'email Must be Valid',
                'password.required' => 'Password Must Be Required',
            ];
            $this->validate($request,$rules,$customeMessage);


            // echo '<pre>';print_r($data);die;
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect("admin/dashboard");
            }
            else {
                return redirect()->back()->with('error_message','Invalid');
            }

        }
        
        return view('admin.login');
    }

    public function logout(){

        Auth::guard('admin')->logout();
        return view('admin/login');
    }
    public function update_admin(){

       // Auth::guard('admin')->logout();
        return view('admin.update_admin_password');
    }

    
    public function checkCurrentPassword(Request $request){

       $data = $request->all();
       if(Hash::check($data['current_pwd'] , Auth::guard('admin')->user()->password)){
        return "true";
       }
       else{
            return "false";
       }
    }




}

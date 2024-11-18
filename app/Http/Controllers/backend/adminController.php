<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{

    
    public function login(){
        // return 123 ;

        return view('backend.login');
    }

    public function login_submit(Request $request){

        $name_email = $request->input('name_email');
        $password = $request->password;
        $remember = $request->remember;
        if(Auth::attempt(['name'=> $name_email, 'password' => $password],$remember)){
            return view('backend.dashboard-admin')->with('sucess','Login Success.');
        }elseif(Auth::attempt(['email'=>$name_email,'password'=>$password],$remember)){
            return view('backend.dashboard-admin')->with('sucess','Login Success.');
        }else{
            return redirect('/login')->with('fail','Invalid Credentail.');
        }
    }
    public function admin(){
        return view('backend.dashboard-admin');
    }
    public function logout(){
        return redirect('/login')->with(Auth::logout());

    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
   public function add_user(){
    return view('backend.add-user');
   }

   public function user_add_submit(Request $request){

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();

    return $request;
   }
   public function list_user(){
      $user = User::Orderby('id','desc')->get();

   
      return view('backend.list-user',['user' => $user]);
   }

   public function delete_user(Request $request){
      $delete = User::where('id',$request->id)->delete();

      if($delete){
         return redirect('/admin/user/list')->with('sucess','Deleted 1 Record.');
      }else{
         
         return redirect('/admin/user/list')->with('fail','Opp! Operation Fail. Try again.');
      }
   }

   public function update_user($id){
      $user = User::where('id',$id)->first();

      return view('backend.update-user',['user' => $user]);
   }
}

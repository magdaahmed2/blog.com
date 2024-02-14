<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
{
    public function user(){
       
        $data['getRecord']=User::getRecordUser();
        return view ('backend.user.list',$data);
    }
    public function add_user(Request $request){
     
    return view ('backend.user.add');


    }
    public function insert_user(Request $request){
        request()->validate([
            "email"=>'required|email|unique:users',
            "name"=>'required',
            "password"=>'required'
           ]);
     $save=new User ;
     $save->name=trim($request->name);
     $save->email=trim($request->email);
     $save->password=Hash::make($request->password);
     $save->status=trim($request->status);
     $save->save();
     return redirect('panel/user/list')->with('success','user successfully created');
    }
    public function edit_user($id){
      
        $data['getRecord']=User::getSingle($id);
        return view('backend.user.edit', $data);

    }
  
    public function  update_user($id,Request $request){
        request()->validate([
            "email"=>'required|email|unique:users,email,'.$id,
            "name"=>'required'
        ]);
        $save= User::getSingle($id) ;
        $save->name=trim($request->name);
        $save->email=trim($request->email);
        if(!empty($request->password)){
        $save->password=Hash::make($request->password);
        }
        $save->status=trim($request->status);
        $save->save();
        return redirect('panel/user/list')->with('success','user successfully updated');
    }
    public function delete_user($id){
        // Retrieve the user record
        $user = User::find($id);
    
        // Check if the user record exists
        if ($user) {
            // Delete the user record
            $user->delete();
    
            // Redirect to a specific page (e.g., a list of users) after deletion
            return redirect('panel/user/list')->with('success', 'User deleted successfully');
        } else {
            // Redirect back with an error message if the user record does not exist
            return redirect()->back()->with('error', 'User not found');
        }
    }
    
}



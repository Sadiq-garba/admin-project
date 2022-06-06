<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{
    





    public function index(){
        

        $post = Role::orderBy('created_at','desc')->paginate(10);
        
         return view('role')->with('post', $post);


    }


    public function createRole(){

        
        return view('addRole');


    }



    public function storeRole(Request $request){

        
          
        $this->validate($request, [
            'name'=>'required',
            'display_name'=>'string|required',
            'description'=>'string|required',
            
           
            
         ]);




       $post = new Role;
       $post->name = $request->input('name');
       $post->display_name = $request->input('display_name');
       $post->description = $request->input('description');
       $post->save();


       return back()->with('success','Saved');




           


    }



}

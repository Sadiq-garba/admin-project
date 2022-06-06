<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\userModel;

use App\Models\LoginDetails;

class MainController extends Controller
{
   public function __construct()
     {
      $this->middleware('auth');
    }


      public function index() {

       return view('index');

     }


     public function showUser() {

      $post = userModel::orderBy('created_at','desc')->paginate(10);
      return view('users')->with('post', $post);

    } 


     public function dashboard() {

        return view('dashboard');
 
      } 


      public function signup() {

        return view('signUp');
 
      }



      public function createUser() {

        return view('addUser');
 
      }


      public function storeUser(Request $request){


         
        $this->validate($request, [
          'role'=>'required',
          'date_of_birth'=>'string|required',
          'status'=>'string|required',
          'address'=>'string|required',
          'phone_number'=>'string|required',
          'first_name'=>'string|required',
          'last_name'=>'string|required',
          'country'=>'string|required',
        
         
          
       ]);
         



       $post = new userModel;

       $post->role = $request->input('role');
       
       $post->dob = $request->input('date_of_birth');
   
       $post->status = $request->input('status');
       
       $post->address = $request->input('address');
      
       $post->phonenumber = $request->input('phone_number');

       $post->first_name = $request->input('first_name');

       $post->last_name = $request->input('last_name');

       $post->country = $request->input('country');

       $post->save();


         return back()->with('success','Saved');

 
    
      }
      


      public function storeLogin(Request $request){


         
        $this->validate($request, [
          'email'=>'required|unique:login_details',
          'username'=>'string|required|unique:login_details',
          'password'=>'string|required|confirmed|min:8',
         
         
        ]);
         


 
           $post = new LoginDetails;

           $post->email = $request->input('email');
       
           $post->username = $request->input('username');
   
           $post->password = hash::make($request->input('password'));
     
      
      

           $post->save();


           return redirect()->back()->with( 'success','Saved');

 
    
      }
     

     



      public function userDetails(Request $request, $id){

        $post = userModel::find($id);
        
        return view('userDetails')->with('post', $post);

   
     }

      
     public function loginDetails($id){

      $post = loginDetails::find($id);
      
      return view('loginDetails')->with('post', $post);

 
   }

     public function updateLogin(Request $request, $id){

      

      $this->validate($request, [
        'email'=>'required|unique:login_details',
        'username'=>'string|required|unique:login_details',
        'password'=>'string|required|confirmed|min:8',
       
       
      ]);
       
    
   
   /*  if($request->hasFile('image')){
        //get file name with extension
       $fileNameWithExt = $request->file('image')->getClientOriginalName();
       //get just filename
       $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
   
       //get just extension
       $extension = $request->file('image')->getClientOriginalExtension();
       // file name to store
        $fileNameToStoreOne= $filename.'_'.time().'.'.$extension;
       //upload image
       $path = $request->file('image')->storeAs('public/banner_img', $fileNameToStoreOne);
       }else{
   
           $fileNameToStoreOne = 'noimage.jpeg';
       
        }
   
        if($request->hasFile('supp_image_one')){
           //get file name with extension
          $fileNameWithExt = $request->file('supp_image_one')->getClientOriginalName();
          //get just filename
          $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
   
          //get just extension
          $extension = $request->file('supp_image_one')->getClientOriginalExtension();
          // file name to store
           $fileNameToStoreTwo= $filename.'_'.time().'.'.$extension;
          //upload image
          $path = $request->file('supp_image_one')->storeAs('public/banner_img', $fileNameToStoreTwo);
          }else{
   
              $fileNameToStoreTwo = 'noimage.jpeg';
          
           } */
   
   
           
       /* if($request->hasFile('banner_img')){
           //get file name with extension
          $fileNameWithExt = $request->file('banner_img')->getClientOriginalName();
          //get just filename
          $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
   
          //get just extension
          $extension = $request->file('banner_img')->getClientOriginalExtension();
          // file name to store
           $fileNameToStoreOne= $filename.'_'.time().'.'.$extension;
          //upload image
          $path = $request->file('banner_img')->storeAs('public/banner_img', $fileNameToStoreOne);
          }else{
   
              $fileNameToStoreOne = 'noimage.jpeg';
          
           }*/
             


           $post = loginDetails::find($id);
          
           $post->email = $request->input('email');
       
           $post->username = $request->input('username');
   
           $post->password = hash::make($request->input('password'));
     
      
      

           $post->save();


           return redirect()->back()->with('success','Saved');
   
   }



      public function updateUser(Request $request, $id){

      

        $this->validate($request, [
          'role'=>'required',
          'date_of_birth'=>'string|required',
          'status'=>'string|required',
          'address'=>'string|required',
          'phone_number'=>'string|required',
          'first_name'=>'string|required',
          'last_name'=>'string|required',
          'country'=>'string|required',
         
          
       ]);
     
      
     
     /*  if($request->hasFile('image')){
          //get file name with extension
         $fileNameWithExt = $request->file('image')->getClientOriginalName();
         //get just filename
         $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
         //get just extension
         $extension = $request->file('image')->getClientOriginalExtension();
         // file name to store
          $fileNameToStoreOne= $filename.'_'.time().'.'.$extension;
         //upload image
         $path = $request->file('image')->storeAs('public/banner_img', $fileNameToStoreOne);
         }else{
     
             $fileNameToStoreOne = 'noimage.jpeg';
         
          }
     
          if($request->hasFile('supp_image_one')){
             //get file name with extension
            $fileNameWithExt = $request->file('supp_image_one')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('supp_image_one')->getClientOriginalExtension();
            // file name to store
             $fileNameToStoreTwo= $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('supp_image_one')->storeAs('public/banner_img', $fileNameToStoreTwo);
            }else{
     
                $fileNameToStoreTwo = 'noimage.jpeg';
            
             } */
     
     
             
         /* if($request->hasFile('banner_img')){
             //get file name with extension
            $fileNameWithExt = $request->file('banner_img')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('banner_img')->getClientOriginalExtension();
            // file name to store
             $fileNameToStoreOne= $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('banner_img')->storeAs('public/banner_img', $fileNameToStoreOne);
            }else{
     
                $fileNameToStoreOne = 'noimage.jpeg';
            
             }*/
               


             $post = userModel::find($id);
            
             $post->role = $request->input('role');
       
            $post->dob = $request->input('date_of_birth');
   
           $post->status = $request->input('status');
       
            $post->address = $request->input('address');
      
             $post->phonenumber = $request->input('phone_number');

            $post->first_name = $request->input('first_name');

            $post->last_name = $request->input('last_name');

             $post->country = $request->input('country');

              $post->save();

      
     
          
          
                                     
      
      
               return redirect()->back()->with('success', 'Your details was saved successfully');
      

     
     
   
     
    
     
     
      //return view('main/form');
     
     }
     


 
   




}

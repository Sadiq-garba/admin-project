<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\userModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
         $post = userModel::all();

         $latest = userModel::orderBy('created_at', 'desc')->take(10)->get();

         $banned = userModel::where('status', 'banned')->get();

         $unconfirmed = userModel::where('status', 'unconfirmed')->get();



         

         return view('dashboard')->with('post', $post)->with('latest', $latest)->with('banned', $banned)->with('unconfirmed',  $unconfirmed) ;
    } 
}

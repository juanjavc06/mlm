<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerIndex extends Controller
{
   function index(Request $request){
      return view('public.login',["msg"=>"A"]);
   }
    
   function register(Request $request,$id){
      return view('public.register');
   }
   
   function dashboard(Request $request){
      return view('admin.dashboard');
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Countries;
use App\Productos;
use App\User;

class RegisterController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'telefono' => 'required|string|min:6|confirmed',
            'pais' => 'required|numeric',
            'ciudad' => 'required|numeric',
            'paquete' => 'required|numeric',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    
    protected function create(array $data) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'email' => $data['email'],
            'email' => $data['email'],
            'email' => $data['email'],
        ]);
    }    
    
    function addUser(Request $request){
        $is_administrator = 0;
    }
    
    function registerFormWithoutId(Request $request){
        $countries = Countries::where('status', 1)->get();
        $productos = Productos::all();
        return view('auth.register',[
            "countries"=>$countries,
            "productos"=>$productos
        ]);
   }
    function registerFormWithId( $id,Request $request   ){
        $exist = User::where('id', 1)->get();
        if ((count($exist)>0)) {
            $countries = Countries::where('status', 1)->get();
            $productos = Productos::all();
            return view('auth.register',[
                "countries"=>$countries,
                "productos"=>$productos,
                "id"=>$id
            ]);
        }else return redirect('/registro');
            
        
        

   }
   
   function dashboard(Request $request){
      return view('admin.dashboard');
   }
   
   function emailExist(Request $request){
       return (count(User::where('email', $request->input("email")))>0)?false:true;
   }
}

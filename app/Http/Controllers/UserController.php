<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   public function index(){
   		//$Name="sasadara";
    	//return view('users',["Username"=>$Name]);

   	return view('users');
    }

    public function StoreData(Request $request){
    	//return $request->all();
    	User::create($request->all());
    	return "you are registered"; 

    }
}

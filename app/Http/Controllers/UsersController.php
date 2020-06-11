<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index($name,$name2){
    	$param = $name .' '. $name2;
    	return $param;
    }

    public function getForm(){
    	return view('usersForm');
    }
    public function processForm(Request $request){
    	$name = $request->input('name');
    	$address = $request->input('address');
    	return "Your name is ".$name.'. '."Your address is ".$address;
    }
}

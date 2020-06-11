<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidationController extends Controller
{
    //
    public function index(){
    	return view('/formValidation/add');
    }

    public function process(Request $request){
    	$this->validate($request,[
    		'name'=>'required|min:5|max:10',
    		'job'=>'required',
    		'age'=>'required|numeric']);

    	return view('/formValidation/output',['data' => $request]);
    }
}

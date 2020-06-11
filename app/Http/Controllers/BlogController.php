<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function index(){
		$name = "Di haryanto";
		$hobbies=['futsal','coding','traveling'];
		$programming = ['eb'=>'php','mobile'=>'flutter'];
		return view('blog',['name' =>$name, 'hobbies' => $hobbies, 'programming'=>$programming]);
	}
    
    public function home(){
    	return view('/blade_template/home');
    }
    public function about(){
    	return view('/blade_template/about');
    }
    public function contact(){
    	return view('/blade_template/contact');
    }
}

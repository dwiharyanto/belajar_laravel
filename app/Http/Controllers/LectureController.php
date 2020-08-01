<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecture;

class LectureController extends Controller
{
    //
    public function index(){
    	$lecture = Lecture::getLecture();

    	return view('/eloquent/oneToOne/lecture',['lecture'=>$lecture]);
    }
}

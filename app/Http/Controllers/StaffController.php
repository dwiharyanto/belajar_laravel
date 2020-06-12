<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staff;

class StaffController extends Controller
{
    public function index(){
    	
    	$staff = Staff::index();

    	return view('/simpleCRUD/index', ['staff'=>$staff]);
    }

    public function addStaff(){
    	
    	return view('/simpleCRUD/add');
    }
    
    public function processAddStaff(Request $request){
    	
    	DB::table('staff')->insert(['name'=> $request->input('name'),
    		'position'=> $request->input('position'),
    		'age'=>$request->input('age'),
    		'address'=>$request->input('address')]);

    	return redirect('/staff');

    }

    public function editStaff($id){
    	
    	$staff = DB::table('staff')->where('id',$id)->get();

    	return view('/simpleCRUD/edit',['staff'=>$staff]);
    }

    public function processEditStaff(request $request){
    	$id=$request->id;
    	$name=$request->name;
    	$age=$request->age;
    	$position=$request->position;
    	$address=$request->address;

    	$query= DB::table('staff')->where('id',$id)->update(['name'=>$name,
    		'age'=>$age,
    		'position'=>$position,
    		'address'=>$address]);

    	return redirect('/staff');
    }

    public function deleteStaff($id){
    	

    	$query= DB::table('staff')->where('id',$id)->delete();

    	return redirect('/staff');
    }

    public function searchStaff(Request $request){

    	$q = $request->q;
    	
    	$staff = DB::table('staff')->where('name','like',"%".$q."%")->paginate(7);

    	return view('/simpleCRUD/index', ['staff'=>$staff]);
    }
}

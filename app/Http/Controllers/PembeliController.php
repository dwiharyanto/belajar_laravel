<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;

class PembeliController extends Controller
{
    //
    public function index(){
		$pembeli = Pembeli::paginate(5);

		return view('/eloquent/pembeli', ['pembeli'=>$pembeli]);
	}

	public function tambah(){

		return view('/eloquent/pembeli_tambah');
	}

	public function prosesTambah(Request $request){

		$this->validate($request,['nama'=>'required|min:5', 'alamat'=>'required']);

		$pembeli = Pembeli::create(['name'=>$request->nama, 'address'=>$request->alamat]);

		return redirect('/pembeli');
	}

	public function update($id){

		$pembeli = Pembeli::find($id);

		return view('/eloquent/pembeli_update',['pembeli'=>$pembeli]);
	}

	public function edit($id, Request $request){

		$this->validate($request,['nama'=>'required|min:5', 'alamat'=>'required']);

		$pembeli = Pembeli::find($id);
		$pembeli->name = $request->nama;
		$pembeli->address = $request->alamat;
		$pembeli->save();

		return redirect ('/pembeli');
	}

	public function delete($id){

		$pembeli = Pembeli::find($id);
		$pembeli->delete();

		return redirect ('/pembeli');
	}
}

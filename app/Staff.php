<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Staff extends Model
{
    public static function index(){
    	$staff = DB::table('staff')->paginate(7);

    	return $staff;
    }
}

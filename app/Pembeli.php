<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Pembeli extends Model
{
	//use SoftDeletes;
    //
    protected $table = "pembeli";

    protected $fillable = ['name', 'address'];

   // protected $dates = ['deleted_at'];
    
}

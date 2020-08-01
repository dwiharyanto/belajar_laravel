<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telpon extends Model
{
    //
    protected $table ='telpon';

    public function lecture(){
    	return $this->belongTo('App\Lecture');
    }
}

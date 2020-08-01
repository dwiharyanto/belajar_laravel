<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Lecture extends Model
{
    //
    protected $table = 'lecture';

    public static function getlecture(){
    	$lecture = self::All();

    	return $lecture;
    }

    public function telpon(){
    	return $this ->hasOne('App\Telpon');
    }
}

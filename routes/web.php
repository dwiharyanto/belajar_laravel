<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// mIndex routing. Route execute first time
Route::get('/', function () {
    return view('welcome');
});

//simple routing. Return string from route 'halo'
Route::get('/halo', function(){
	return "Laravel routing Example. Return string to halo uri segment";
});


// shorcut routing to view directly
route::get('/profile',function(){
	return view('blog');
});

//ROUTING FOR BLADE TEMPLATE VIE
	//Basic routing concept with controller and call index method
	route::get('/blog','BlogController@index');

	route::get('/blog/home','BlogController@home');

	route::get('/blog/about','BlogController@about');

	route::get('/blog/contact','BlogController@contact');


//ROUTING FOR PASSING DATA
	//passing data from URI router as parameter of index method
	route::get('/users/{param}/{param2}','UsersController@index');

	route::get('/usersform','UsersController@getForm');

	route::post('/usersform/process','UsersController@processForm');


//ROUTING FOR SIMPLE CRUD
	route::get('/staff','StaffController@index');
	route::get('/staff/add','StaffController@addStaff');
	route::post('/staff/processadd','StaffController@processAddStaff');
	route::get('/staff/edit/{id}','StaffController@editStaff');
	route::post('/staff/processedit','StaffController@processEditStaff');
	route::get('/staff/delete/{id}','StaffController@deleteStaff');
	route::get('/staff/search','StaffController@searchStaff');

//ROUTING FOR FORM VALIDATION

	route::get('/form','FormValidationController@index');
	route::post('/form/process','FormValidationController@process');
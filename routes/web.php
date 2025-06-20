<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , function (){
return view ('home');
});

//short from of opneing file
Route::view('/abc' , 'welcome');


//passing data in url
Route::get('/about/{name}'  , function($name){
    echo $name;
    return view('about' , ['name' => $name]);
});


/* Redirect the page
means open home kary ho open about jaye .
     Route::Redirect('/home' , '/about/anil'); */

 //controller calls
 Route::get('/user' , [Usercontroller::class , 'myFunc']);
 Route::get('/about' , [Usercontroller::class , 'hello']);
 Route::get('/new/{name}' , [Usercontroller::class , 'new']);
 Route::get('/news' , [Usercontroller::class  ,'my']);
 Route::get('/get/{name}' , [Usercontroller::class ,'miss']);
Route::get('/admin' , [Usercontroller::class , 'adminlogin']);

Route::get('/myhome' , function(){
return view('myhome');
});
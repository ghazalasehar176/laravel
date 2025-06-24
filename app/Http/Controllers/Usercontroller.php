<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\view; //check admin panel exist or not 

class Usercontroller extends Controller
{

    function myFunc(){
        return "first controller function";
    }

    function hello(){
        return "second controller function";
    }

    function new($name){
        return  "Hello , this is " .$name;
    }

    function my(){
        return view('home');
    }
    // function getr($name){
    //     return view('getuser' , ['name'=>$name]);
    // }

     function mine($name){
        return view('getuser');
    }

    
  function myuser($namme){
  echo "hello , this is user ".$namme;//passing name function
  }

  function view(){
    return view('home');
  }

  function getuser($name) {
  return view('getuser' , ['name' => $name]); //passing the name
  }

  function adminLogin(){
    if(view::exists('admin.login')){    //check admin panel exist or not 
         return view('admin.login');
    }
   else{
    echo "no view found ";
   }
  }
}


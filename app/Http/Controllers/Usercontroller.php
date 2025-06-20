<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    function miss($name){
        return view('getuser' ,['name'=>$name]);
    }

    function adminlogin(){
        return view('admin.login');
    }
}


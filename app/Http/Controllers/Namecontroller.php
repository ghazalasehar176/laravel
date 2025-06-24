<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Namecontroller extends Controller
{
    function myName(){
        $name = 'maham';
        $user = ['ayesha' , 'aliza' , 'maham' , 'azbiya'];
        return view('name' , ['name'=>$name, 'user'=>$user]);
    }

    function myCon(){
        return view('contact');
    }
}

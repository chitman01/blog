<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function showHello(){
        return "Hello Controller";
    }

    function showName($data){
        return "<h1>Show Name is : ".$data."</h1>";
    }

    function show(){
        return view('create.user')
            ->with('name','Supawit')
            ->with('title','Laravel Framework');
    }
}

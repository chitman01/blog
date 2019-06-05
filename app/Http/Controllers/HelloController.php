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
}

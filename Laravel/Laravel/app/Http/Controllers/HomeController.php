<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index($name="abhishek"){
    //    return "Hey this is the first controller";

    echo $name;


   }
}

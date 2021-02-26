<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){
        return "Welcome User";
    }

    public function verifyUser(){
         $url = route('profile');
         return redirect($url);
    }

    public function getUser(){
        $url = route('userData',['id'=>1,'name'=>'Abhishek']);
        return redirect($url);
    }
}

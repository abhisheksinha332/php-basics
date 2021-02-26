<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function registration(request $request){
            $fname=$request->input('fname');
            echo "first name is $fname";
    }
}

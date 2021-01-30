<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index($name='abhishek', $id = 56){

        return view('student',compact('name','id'));
    }
}

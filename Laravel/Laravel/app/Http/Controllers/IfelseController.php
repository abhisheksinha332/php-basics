<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IfelseController extends Controller
{
    public function index(){
        $users = ['user1','user2','user3','user4'];
        return view('ifelse', compact('users'));
    }
}

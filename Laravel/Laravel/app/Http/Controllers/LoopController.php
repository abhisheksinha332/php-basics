<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    public function index(){
        $users = ['user1','user2','user3','user4'];
        return view('loops', compact('users'));
    }
}

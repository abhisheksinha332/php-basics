<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home(){
        return view('menus.home');
    }
    public function product(){
        return view('menus.product');
    }
    public function about(){
        return view('menus.about');
    }
    public function help(){
        return view('menus.help');
    }
}

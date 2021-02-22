<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home(){
        return view('menus.home');
    }
    public function product(){
        $products = ['Fruits','Vegetables','Coldrink'];
        return view('menus.product',compact('products'));
    }
    public function about(){
        return view('menus.about');
    }
    public function help(){
        return view('menus.help');
    }
}

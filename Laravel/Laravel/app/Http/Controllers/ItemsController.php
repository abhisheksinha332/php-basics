<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index(){
        $item = 'watch';
        return view('items',compact('item'));
    }
    public function index1($item='null'){

        return view('items',compact('item'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index(request $request)
    {
        $path = $request->path();
        echo "this is pathname $path";
        echo "<br/>";


        $pattern = $request->is('foo/*');
        echo "The is method $pattern";
        echo "<br/>";

        $method = $request->isMethod('foo/*');
        echo "The isMethod method $method";
        echo "<br/>";

        $method =$request->method();
        echo 'Metod is '.$method;
        echo "<br/>";

        $url = $request->url();
        echo "The is url method $url";
        echo "<br/>";

        $url1 = $request->fullurl();
        echo "The is fullurl method $url1";
        echo "<br/>";

        $routeis = $request->routeIs('user.*');
        echo "routeIs : ".$routeis;
    }
}

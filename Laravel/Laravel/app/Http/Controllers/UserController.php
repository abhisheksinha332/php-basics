<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function submission(Request $request){
        $username = $request->input('username');
        echo "Username is ".$username;
        echo "<br>";

        $password = $request->input('password');
        echo "Password is ".$password;
    }
    }
}

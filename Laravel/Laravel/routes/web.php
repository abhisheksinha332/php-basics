<?php
//namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\LoopsController;
use App\Http\Controllers\LoopController;
use App\Http\Controllers\IfelseController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return 'hello world';
});
Route::get('/', function () {
    return view('welcome');

});
Route::get('/info', function (){
    $name = ['firstName'=>'abhishek', 'lastName'=>'sinha'];
    return $name;
});

Route::get('/customer/{name}', function ($name) {
    return 'customer'.$name;
});
Route::get('/customers/{name?}/{id?}', function ($name='abhishek', $id=12) {
    return 'customer : '.$name.' '.'Id : '.$id;
});
Route::get('/view3', function(){
    return view('test1')->with('name','abhishek')->with('occupation','student');
});

Route::get('/view', function () {
    return view('test');

});

Route::get('/view1', function () {
    return view('test1',['name'=>'Abhishek']);

});

Route::get('/greet', function () {
    return view('greetings',['name'=>'Abhishek ', 'occupation'=>'student']);

});

Route::view('/greet1', 'greetings',['name'=>'Abhishek ', 'occupation'=>'student']);

Route::get('test1', function(){
    return view('test1');
});
Route::get('test2', function(){
    return view('test2');
});
Route::get('/test3/{name?}/{occupation?}',function($name='sinha',$occupation='web developer'){
    return view('test1',compact('name','occupation'));
});

Route::get('/home/{name?}', [HomeController::class, 'index']);

Route::get('/items',[ItemsController::class, 'index']);

Route::get('/item/{item?}',[ItemsController::class, 'index1']);


Route::get('/user/{name?}',function($name=null){
    return $name;
})->where('name','[A-Za-z]+');

Route::get('/user/{id?}',function($id=null){
    return $id;
})->where('id','[0-9]+');

Route::get('/user/{name?}/{id?}',function($name=null,$id=null){
    return $name." ".$id;

})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);

Route::get('/users/{id?}',function($id=null){
    return $id;
});


Route::get('test', function(){
    return "Hey, this is redirected";
    })->name('testing');

    Route::get('redirection', function(){
    return redirect()->route('testing');
    // return redirect()->route('profile',['id'=>1]);
    });


    Route::get('/student/{name?}/{id?}',[StudentController::class, 'index'])->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);

    Route::get('/verify/{name}',function($name){
        return "Welcome, $name";
        })->name('testing1');

        Route::get('redirection1', function(){
        return redirect()->route('testing1',['name'=>'Michael']);
        });


Route::get('/abhi/{name}',function($name){
    return "Welcome, $name";
})->name('testing1');

Route::get('redirect/{name?}', function($name=null){
    return redirect()->route('testing1',['name'=>$name]);
});


Route::get('/emp/{id}/{name}/{des}/{dep}/{sal}',function($id,$name,$des,$dep,$sal){
    return view('employee',compact('id','name','des','dep','sal'));
})->name('employees');

Route::get('employee/{id?}/{name?}/{des?}/{dep?}/{sal?}', function($id=1,$name='abhishek',$des='student',$dep='cse',$sal=5000){
    return redirect()->route('employees',compact('id','name','des','dep','sal'));
})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+','des'=>'[A-Za-z]+','dep'=>'[A-Za-z]+','sal'=>'[0-9]+']);;



Route::get('emp/', function(){
    $id=10;
    $name="Abhishek Sinha";
    $des='Student';
    $dep="CSE";
    $sal=10000;
    return view('employee',compact('id','name','des','dep','sal'));
    })->name('employees');

    Route::get('rediremp', function(){
    return redirect()->route('employees');
    });





    Route::get('control',[RedirectController::class, 'index']);

    Route::get('redirectcontroller',function(){
        return redirect()->action([RedirectController::class, 'index']);
    });


    Route::get('employeecontroller/{id}/{name}/{des}/{dep}/{sal}',[EmployeeController::class, 'index']);

  //  Route::get('employeecontroller',[EmployeeController::class, 'index1']);


Route::get('emp/{id}/{name}/{des}/{dep}/{sal}',[EmployeeController::class, 'index1']);

Route::get('emp/{id}/{name}/{des}/{dep}/{sal}', [EmployeeController::class, 'index4'])->name('controlredirect');

Route::get('redirectcontroller1', function(){
return redirect()->route('controlredirect', ['id'=>23,'name'=>'Michael', 'designation'=>'Prof','department'=>'cse', 'salary'=>45000]);
});

Route::get('redirectcontroller2/{id}/{name}/{designation}/{department}/{salary}', function($id,$name,$designation,$department,$salary){
return redirect()->route('controlredirect', compact('id','name','designation','department','salary'));
});

Route::get('/google',function(){
    return redirect()->away('https://www.google.com/');
});



/* --------------------------- Blade Template ---------------------------------------*/

Route::get('blade',function(){
    return view('test3',['name'=>'Abhishek']);
});

Route::get('loops', [LoopsController::class, 'index']);

Route::get('loop', [LoopController::class, 'index']);

Route::get('ifelse',[IfelseController::class, 'index']);


Route::get('switchcase/{i?}', function ($i=null) {
    return view('switchcase',compact('i'));

});


// Route::get('/homes', function () {
//     return view('home');

// });

// Route::get('/prod', function () {
//     return view('product');

// });

// Route::get('/aboutus', function () {
//     return view('about');

// });

// Route::get('/help', function () {
//     return view('help');

// });


Route::get('homes', [NavController::class, 'home']);
Route::get('product', [NavController::class, 'product']);
Route::get('aboutus', [NavController::class, 'about']);
Route::get('help', [NavController::class, 'help']);





Route::get('/img', function () {
    return view('img');
});

Route::get('/let', function(){
    return view('test5');
});

Route::get('menuhome', function(){
    return view('Menus1.home');
});
Route::get('menuabout', function(){
    return view('Menus1.about');
});
Route::get('menuproduct', function(){
    $product = [
        ['brand'=>'puma','type'=>'bag','cost'=>900],
        ['brand'=>'Gucci', 'type'=>'T-shirt', 'cost'=>1900],
        ['brand'=>'Reebok', 'type'=>'bat', 'cost'=>1000],
        ['brand'=>'Adidas', 'type'=>'shoes', 'cost'=>3000],
        ['brand'=>'Woodlands', 'type'=>'shoes', 'cost'=>2400],
];
    return view('Menus1.product',['product'=>$product]);
});
Route::get('menucontact', function(){
    return view('Menus1.contact');
});


Route::get('users1/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('verifyuser',[ ProfileController::class, 'verifyUser']);

Route::get('users1/{id}/{name}/profile',function($id,$name){
    return "My name is ".$name.' and My id is '.$id;
})->name('userData');
Route::get('getuser',[ ProfileController::class, 'getUser']);


//   ------------ Prefix routing ---------------

Route::prefix('admin')->group(function(){
    Route::get('routing',function(){
        return "Hey there";
    });
});

//-------------------------------------------

Route::name('admin.')->group(function(){
    Route::get('routing',function(){
        return "Hey there this is prefix route";
    })->name('user');
});

Route::get('adminredirect',function(){
    return redirect()->route('admin.user');
});

//-------------------------------------------


Route::get('foo/bar', [UrlController::class, 'index']);

//---------------------------------------------

Route::get('formdata',function(){
    return view('form.register');
});

Route::post('users5/register',[])

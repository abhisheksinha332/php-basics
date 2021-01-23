<?php
//namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemsController;
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






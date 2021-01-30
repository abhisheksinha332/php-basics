<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index( $id = 56,$name='abhishek', $des = 'student',$dep = 'cse',$sal=5000){
        return view('employee',compact('id','name','des','dep','sal'));
    }

    public function index1($id,$name,$designation,$department,$salary)
    {
        return "ID:- $id Name:- $name Designation:- $designation Department:- $department Salary:- $salary";
    }


    public function index3($id,$name,$designation,$department,$salary)
{
return "ID:- $id Name:- $name Designation:- $designation Department:- $department Salary:- $salary";
}
public function index4($id,$name,$designation,$department,$salary)
{
return view('employee',compact('id','name','designation','department','salary'));

}
}

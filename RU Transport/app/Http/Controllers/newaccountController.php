<?php

namespace App\Http\Controllers;   /* class ta kon jaigai ace seta bole deoya */

use Illuminate\Http\Request; 
use App\Employee;


class newaccountController extends Controller
{
     

     public function Add(Request $request){

     	$employee = new Employee();

     	$employee->name = $request['name'];
     	$employee->designation = $request['designation'];
     	$employee->userid = $request['id'];
     	$employee->imagelink = "imagelink";

     	$employee->save();

     	return view('course.create');

     }
}

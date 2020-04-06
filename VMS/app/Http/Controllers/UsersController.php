<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.users.index');
    }
    public function SubmitUsers(){
        $inputs = request()->all();

        $name = $inputs['name'];
        $mobileNo = $inputs['mobileNo'];
        $email = $inputs['email'];
        $city = $inputs['city'];
        $package = $inputs['package'];
        $cnic = $inputs['cnic'];
        $password = $inputs['password'];
        $gender = $inputs['gender'];
        $result = DB::select(DB::raw("insert into users (Name,Mobile_No,Email,Password,CNIC ,Package_No,City,Gender) values ('$name', '$mobileNo', '$email','$password','$cnic',$package,
            '$city','$gender');"));

        return response()->json(['success' => 'success'], 200);
    }
    public function UpdateUser(){
        $inputs = request()->all();
      $id = $inputs['id'];
       $name = $inputs['name'];
        $mobileNo = $inputs['mobileNo'];
        $email = $inputs['email'];
        $city = $inputs['city'];
        $package = $inputs['package'];
        $cnic = $inputs['cnic'];
        $password = $inputs['password'];
        $gender = $inputs['gender'];

        $result = DB::select(DB::raw("update  users set Name = '$name' , Mobile_No  = '$mobileNo' , Email = '$email' , Password = '$password' , CNIC = '$cnic' ,  Package_No = $package , City = '$city' , Gender = '$gender' where UID =$id ;"));

        return response()->json(['success' => 'success'], 200);
    }


}

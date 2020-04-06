<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
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
        return view('layouts.driver.index');
    }
    public function SubmitDriver(){
        $inputs = request()->all();
      
        $name = $inputs['name'];
        $mobileNo = $inputs['mobileNo'];
        $email = $inputs['email'];
        $city = $inputs['city'];
        $rating = $inputs['rating'];
        $cnic = $inputs['cnic'];
        $password = $inputs['password'];
        $gender = $inputs['gender'];
        $car_no = $inputs['car_no'];
        $license = $inputs['license'];
        $age = $inputs['age'];

        $result = DB::select(DB::raw("insert into driver (Name,Mobile_No,Email,Password,CNIC ,License_No,Car_No,Rating,City,Age,Gender) values ('$name', '$mobileNo', '$email','$password','$cnic','$license',
            '$car_no',$rating,'$city',$age,'$gender');"));

        return response()->json(['success' => 'success'], 200);
    }

}

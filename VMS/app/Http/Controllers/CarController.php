<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CarController extends Controller
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
        return view('layouts.car.index');
    }
        

    public function SubmitCar(){
        $inputs = request()->all();
      
        $name = $inputs['CompanyName'];
        $CarName = $inputs['CarName'];
        $ModleNo = $inputs['ModleNo'];
        $NoPlate = $inputs['NoPlate'];
        $color = $inputs['color'];

        $result = DB::select(DB::raw("insert into cars (Company,Name,Color,No_Plate,Model) values ('$name', '$CarName','$color','$NoPlate','$ModleNo');"));

        return response()->json(['success' => 'success'], 200);
    }




}


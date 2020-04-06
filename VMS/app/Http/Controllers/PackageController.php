<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PackageController extends Controller
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
        return view('layouts.package.index');
    }

    public function SubmitPackage(){
        $inputs = request()->all();
      
        $name = $inputs['name'];
        $type = $inputs['type'];

        $result = DB::select(DB::raw("insert into package (Name,Type) values ('$name', '$type');"));

        return response()->json(['success' => 'success'], 200);
    }

}

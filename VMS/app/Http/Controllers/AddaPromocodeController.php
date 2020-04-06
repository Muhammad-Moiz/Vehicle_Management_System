<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddaPromocodeController extends Controller
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
        return view('layouts.promocode.index');
    }
    public function SubmitPromoCode(){
        $inputs = request()->all();

        $code = $inputs['code'];
        $title = $inputs['title'];
        $discount = $inputs['discount'];

        $result = DB::select(DB::raw("insert into promocode (Code, Title, Discount) values ('$code', '$title', $discount);"));

        return response()->json(['success' => 'success'], 200);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ListUsersController extends Controller
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
        return view('layouts.listUsers.index');
    }

    public function GetAllUsers(){
        $result = DB::select(DB::raw("select * from users;"));

        return response()->json($result);
    }    


    public function DeleteUser($id){
        $result = DB::select(DB::raw("DELETE FROM users WHERE UID=$id;"));

      return response()->json(['success' => 'success'], 200);
    }    



}

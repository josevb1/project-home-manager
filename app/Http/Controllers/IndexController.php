<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function friends() {

        $userId = Auth::user()->id;
        $allUsers = DB::table('users')->where('id', '!=', $userId)->get();
    
       return $allUsers;
    }

    public function sendRequest($id) {


        return Auth::user()->addfriend($id);
        
    }
}

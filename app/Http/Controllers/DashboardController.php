<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;

use xixha\Http\Requests;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
 
    public function index(Request $request){
        return view('dashboard.index');
    }
}
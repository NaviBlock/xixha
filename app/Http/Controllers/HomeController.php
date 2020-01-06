<?php

namespace xixha\Http\Controllers;

use xixha\Http\Requests;
use Illuminate\Http\Request;

use xixha\User;
use Illuminate\Support\Facades\Redirect;
use xixha\Http\Requests\UsuarioFormRequest;
use DB;

class HomeController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        return view('home');
    }
}
<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;
use xixha\Http\Requests;

use xixha\Persona;
use xixha\Api;
use Illuminate\Support\Facades\Redirect;
use xixha\Http\Requests\ApiFormRequest;
use DB;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
} 

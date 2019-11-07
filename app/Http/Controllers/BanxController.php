<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;
use xixha\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
/*use xixha\Http\Requests\PersonaFormRequest;*/ 
/*use xixha\Persona; */

use DB;
use Storage;
use Illuminate\Support\Str;

use Response;
use Illuminate\Support\Collection;
use Illuminate\Database\DatabaseManager;

use xixha\Banx;
use xixha\Http\Controllers\Controller;
/*use xixha\Http\Controllers\UsuarioController;*/
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\Model;

class BanxController extends Controller
{ 
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function banx(Request $request){
        if ($request){
            $query = trim($request->get('searchText'));
            $personas = DB::table('persona')            
            ->select('nombre','apellidopa','apellidoma','folio')
    
            
            /*->where('name','LIKE','%'.$query.'%')
            ->where('rol','=','Super')
    
    
            ->where('email','LIKE','%'.$query.'%')
            ->orwhere('rol','=','Super')            

            ->orderBy('id','desc')*/
            ->paginate(10);

            return view('banx.banx',['personas'=>$personas,'searchText'=>$query]);
        }
    }

    /*public function banx(){
        return view('banx.banx');
    }*/

    public function show($id){
        return view('banx.show',['persona'=>Persona::findOrFail($id)]);
    }

    public function create(){
        return view('banx.create');
    }

    public function edit(){
        return view('banx.edit');
    }

    public function modal(){
        return view('banx.modal');
    }

    public function destroy(){
        return view('banx.destroy');
    }
} 
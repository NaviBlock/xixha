<?php

namespace xixha\Http\Controllers;
 
use Illuminate\Http\Request;
use xixha\Http\Requests;

use xixha\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use xixha\Http\Requests\UsuarioFormRequest;
use DB;
use Storage;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        if ($request){
            $query = trim($request->get('searchText'));
            $usuarios = DB::table('users')            
            
            //User
            ->where('name','LIKE','%'.$query.'%')
            ->where('rol','=','User') 
            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('rol','=','User')

            //Administrador
            ->orwhere('name','LIKE','%'.$query.'%')
            ->where('rol','=','Administrador')
            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('rol','=','Administrador')

            //Moderador
            ->orwhere('name','LIKE','%'.$query.'%')
            ->where('rol','=','Moderador')
            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('rol','=','Moderador')

            //Supervisor
            ->orwhere('name','LIKE','%'.$query.'%')
            ->where('rol','=','Supervisor')
            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('rol','=','Supervisor')
           
            ->orderBy('id','desc') 
            ->paginate(5);  
            return view('secs.index',['usuarios'=>$usuarios,'searchText'=>$query]);
        }
    }
    
    public function create(){
        return view("secs.create");
    }

    public function store(UsuarioFormRequest $request){
        $usuario = new User;
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->rol=$request->get('rol');
        $usuario->remember_token=bcrypt(str_random($request->get('pin')));       
        $usuario->save();        
        return Redirect::to("secs");
    }

    public function edit($id){
        return view("secs.edit",["usuario"=>User::findOrFail($id)]);
    }

    public function update(UsuarioFormRequest $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->name=$request->get('name');
        //$usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->update();
        return Redirect::to("secs");
    }

    public function destroy($id){
        $usuario = User::findOrFail($id);       
        $usuario->rol='Inactivo';
        $usuario->update();
        return Redirect::to("secs");
    }
} 
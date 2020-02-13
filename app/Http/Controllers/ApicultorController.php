<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;
use xixha\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use xixha\Http\Requests\PersonaFormRequest;
 
use xixha\Persona; 
use DB;
use Storage;
use Illuminate\Support\Str;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
use Illuminate\Database\DatabaseManager;

use xixha\User;
use xixha\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\Model;

class ApicultorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
  
    public function padron(Request $request){
        if ($request){
            $query = trim($request->get('searchText'));
            $personas = DB::table('persona')
            ->select('idpersona','tipo_persona','nombre','apellidopa','apellidoma','curp','estado','telefono','email','upp','pgn','clave_rast','num_colmena','prod_anual','certificacion','fecha_hora','sexo','rfc','estadoP','municipio','calle','colonia','temp_cosecha','loc_api','mov_col','donde','observacion','folio','img_perfil')

            ->where('nombre','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')

            ->orwhere('apellidopa','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')

            ->orwhere('apellidoma','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')

            ->orwhere('telefono','LIKE','%'.$query.'%') 
            ->where('tipo_persona','=','Apicultor')

            ->orwhere('curp','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')

            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')

            ->orwhere('upp','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')

            ->orwhere('pgn','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')

            ->orwhere('clave_rast','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')

            ->orwhere('folio','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')

            ->orderBy('idpersona','desc')
            ->paginate(10);
            return view('users.padron',['personas'=>$personas,'searchText'=>$query]);
        }
    }
 
    public function index(){  
        return view("users.index");
    }

    /*public function show($id){
        return view('users.show',['persona'=>Persona::findOrFail($id)]);
    } */

    public function perfil(){
        $persona = DB::table('persona')->get();
        return view('users.perfil', ['persona' => $persona]);
        //return view("users.perfil");
    }
} 
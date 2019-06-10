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

use Response;
use Illuminate\Support\Collection;
use Illuminate\Database\DatabaseManager;

use xixha\User;
use xixha\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProveedorController extends Controller
{ 
    public function __construct(){
        $this->middleware('auth');
    }
 
    public function index(Request $request){
        if ($request){
            $query = trim($request->get('searchText'));
            $personas = DB::table('persona')
            ->select('idpersona','tipo_persona','nombre','apellidopa','apellidoma','curp','direccion','telefono','email','upp','pgn','clave_rast','certificacion','prod_anual','num_colmena')

            ->where('nombre','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('telefono','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('curp','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('upp','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('pgn','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('clave_rast','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orderBy('idpersona','desc')
            ->paginate(5);
            return view('compras.proveedor.index',['personas'=>$personas,'searchText'=>$query]);
        }
    }
 
    public function create(){  
        return view("compras.proveedor.create");
    }
  
    public function store(PersonaFormRequest $request){
        $personas = new Persona;
        $personas->tipo_persona='proveedor';
        $personas->nombre=$request->get('nombre');
        $personas->direccion=$request->get('direccion');
        $personas->telefono=$request->get('telefono');
        $personas->email=$request->get('email');
        $personas->prod_anual=$request->get('prod_anual');
        $personas->num_colmena=$request->get('num_colmena');
        $personas->curp=$request->get('curp');
        $personas->certificacion=$request->get('certificacion');
        $personas->upp=$request->get('upp');
        $personas->pgn=$request->get('pgn');
        $personas->clave_rast=$request->get('clave_rast');
        $personas->save();

        
        /*if (Input::hasFile('img_curp')) {
            $file=Input::file('img_curp');
            $file->move(public_path().'/imagenes/perfil',$file->getClientOriginalName());
            $personas->img_curp=$file->getClientOriginalName();
        }*/

        /*if (Input::hasFile('img_perfil')){
            $file=Input::file('img_perfil');
            $nombre_original=$file->getClientOriginalName();
            $extension=$file->getClientOriginalExtension();
            $nuevo_nombre="userxixha-".$id.$extension;
            $file->move(public_path().'/imagenes/perfil', $file->getClientOriginalName());
            $personas->img_perfil=$file->getClientOriginalName();
        }

        if (Input::hasFile('img_perfil')) {
            $file=Input::file('img_perfil');
            $nombre_original=$file->getClientOriginalName();
            $extension=$file->getClientOriginalExtension();
            $file="userxixha-".$id.$extension;
            $file->move(public_path().'/storage/perfil',$file->getClientOriginalName());
            $personas->img_perfil=$file->getClientOriginalName();
        }
     
        if (Input::hasFile('img_upp')) {
            $file=Input::file('img_upp');
            $file->move(public_path().'/imagenes/perfil',$file->getClientOriginalName());
            $personas->img_upp=$file->getClientOriginalName();
        }
        
        if (Input::hasFile('img_pgn')) {
            $file=Input::file('img_pgn');
            $file->move(public_path().'/imagenes/perfil',$file->getClientOriginalName());
            $personas->img_pgn=$file->getClientOriginalName();
        }

        if (Input::hasFile('img_clave_rast')) {
            $file=Input::file('img_clave_rast');
            $file->move(public_path().'/imagenes/perfil',$file->getClientOriginalName());
            $personas->img_clave_rast=$file->getClientOriginalName();
        }*/
        
        return Redirect::to('compras/proveedor'); 
    }
 
    public function show($id){
        return view('compras.proveedor.show',['persona'=>Persona::findOrFail($id)]);
    }
  
    public function edit($id){
        return view('compras.proveedor.edit',['persona'=>Persona::findOrFail($id)]);
    }
 
    public function update(PersonaFormRequest $request,$id){
        /*$persona = Persona::findOrFail($id); // categoria que quiero modificar 
        $persona->nombre=$request->get('nombre');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
        $persona->num_colmena=$request->get('num_colmena');
        $persona->geoloc_apiario=$request->get('geoloc_apiario');
        $persona->prod_anual=$request->get('prod_anual');
        $persona->temp_cosecha=$request->get('temp_cosecha');
        $persona->certificacion=$request->get('certificacion');
        $persona->mueve_sus_colmena=$request->get('mueve_sus_colmena');
        $persona->a_donde=$request->get('a_donde');
        $persona->observaciones=$request->get('observaciones');
        $persona->upp=$request->get('upp');
        $persona->pgn=$request->get('pgn');
        $persona->clave_rast=$request->get('clave_rast');
        $persona->update();*/
        return Redirect::to('compras/proveedor');
    }
 
    public function destroy($id){
        $persona = Persona::findOrFail($id);
        $persona->tipo_persona ='Inactivo';
        $persona->update();
        return Redirect::to('compras/proveedor');	
    }
}  